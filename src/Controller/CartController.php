<?php

namespace App\Controller;

use App\Entity\Order;
use App\Entity\Paiement;
use App\Entity\Produits;
use App\Entity\Line;
use App\Entity\User;
use App\Repository\OrderRepository;
use App\Repository\PaiementRepository;
use App\Repository\ProduitsRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\File\Exception\FileException;
use Symfony\Component\HttpFoundation\File\UploadedFile;

use Symfony\Component\HttpFoundation\RequestStack;
use MercurySeries\FlashyBundle\FlashyNotifier;

use Symfony\Component\HttpFoundation\RedirectResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

/**
 * @Route("/panier")
 */

class CartController extends AbstractController
{
    /**
     * @Route("/", name="cart_index")
     */
    public function index(OrderRepository $orderRepository): Response
    {
        /** @var User $user */
        $user = $this->getUser();

        /** @var ?Order $order */
        $order = $orderRepository->findOneBy([
            "state" => "cart",
            "user" => $user
        ]);

        if($order === null){
            $order = (new Order())->setUser($user);
        }

        return $this->render('cart/index.html.twig', [
            'order' => $order
        ]);
    }

    /**
     * @Route("/admin", name="cart_index_admin")
     */
    public function showAll(OrderRepository $orderRepository): Response
    {
        return $this->render('cart/show.html.twig', [
            'orders' => $orderRepository->findAll(),
        ]);
    }


    /**
     * @Route("/admin/single_cart/{id}", name="cart_single_admin")
     */
    public function showSingle(int $id, OrderRepository $orderRepository):Response
    {
        return $this->render('cart/single_cart.html.twig', [
            'orders' => $orderRepository->findAll(),
            'order' => $orderRepository->findOneBy([
                "state" => "cart",
                "id" => $id
            ]),
        ]);
    }


    /**
     * @Route("/AddToCart/{id}", name="addToCart")
     */
    public function addToCart(Produits $produit, OrderRepository $orderRepository): RedirectResponse
    {
        /**
         * @var User $user
         */
        $user = $this->getUser();
        //$user = $request->getSession();
        /**
         * @var ?Order $order
         */
        $order = $orderRepository->findOneBy([
            "state" => "cart",
            "user" => $user
        ]);

        if ($order === null)
        {
            $order = (new Order())->setUser($user);
            $this->getDoctrine()->getManager()->persist($order);
            //$this->addFlash("succes", "Produit ajouté au panier.");
        }
        $order->addProduct($produit);

        $this->getDoctrine()->getManager()->flush();
        //$flashy->success('Event created!');
        $this->addFlash("info", "Produit ajouté au panier.");

        return $this->redirectToRoute("affichage_produit", ["id" => $produit->getId(), "cart" => true]);
    }

    /**
     * @Route("/{id}/supprimer", name="cart_delete")
     */
    public function delete(Line $line): RedirectResponse
    {
        $this->getDoctrine()->getManager()->remove($line);
        $this->getDoctrine()->getManager()->flush();
        return $this->redirectToRoute("cart_index");
    }

    /**
     * @Route("/{id}/augmenter-quantite", name="cart_increase_quantity")
     */
    public function increaseQuantity(Line $line): RedirectResponse
    {
        $line->increaseQuantity();
        $this->getDoctrine()->getManager()->flush();
        return $this->redirectToRoute("cart_index");
    }

    /**
     * @Route("/{id}/diminuer-quantite", name="cart_decrease_quantity")
     */
    public function decreaseQuantity(Line $line): RedirectResponse
    {
        $line->decreaseQuantity();

        if ($line->getQuantity() === 0) {
            $this->getDoctrine()->getManager()->remove($line);
        }

        $this->getDoctrine()->getManager()->flush();
        return $this->redirectToRoute("cart_index");
    }
}