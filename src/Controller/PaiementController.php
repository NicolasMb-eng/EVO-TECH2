<?php

namespace App\Controller;

use App\Entity\Order;
use App\Entity\Paiement;
use App\Entity\User;
use App\Manager\OrderManager;
use App\Repository\OrderRepository;
use App\Repository\PaiementRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Security\Core\User\UserInterface;

// Include Dompdf required namespaces
use Dompdf\Dompdf;
use Dompdf\Options;



class PaiementController extends AbstractController
{
    /**
     * @Route("/user/payment/{id}/show", name="payment", methods={"GET", "POST"})
     * @param Order $order
     * @return Response
     */
    public function payment(Order $order, OrderManager $orderManager): Response
    {
        if (!$this->getUser()) {
            return $this->redirectToRoute('login');
        }

        return $this->render('paiement/paiement.html.twig', [
            'user' => $this->getUser(),
            'intentSecret' => $orderManager->intentSecret($order),
            'order' => $order
        ]);
    }

    /**
     * @Route("/user/subscription/{id}/paiement/load", name="subscription_paiement", methods={"GET", "POST"})
     * @param Order $order
     * @param Request $request
     * @return \Symfony\Component\HttpFoundation\RedirectResponse|Response
     * @throws \Exception
     */
    public function subscription(
        Order $order,
        Request $request,
        OrderManager $orderManager
    ){
        $user = $this->getUser();

        if($request->getMethod() === "POST") {
            $resource = $orderManager->stripe($_POST, $order);

            if(null !== $resource) {
                $order->setState("pending");
                $orderManager->create_subscription($resource, $order, $user);

                return $this->render('paiement/reponse.html.twig', [
                    'order' => $order
                ]);
            }
        }

        return $this->redirectToRoute('payment', ['id' => $order->getId()]);
    }

    /**
     * @Route("/user/payment/orders", name="payment_orders", methods={"GET"})
     */
    public function payment_orders(PaiementRepository $paiementRepository): Response
    {

        /*if (!$this->getUser()) {
            return $this->redirectToRoute('login');
        }

        return $this->render('paiement/payment_story.html.twig', [
            'user' => $this->getUser(),
            'paiements' => $orderManager->getPayment($this->getUser()),

        ]);*/
        /** @var User $user */
        $user = $this->getUser();



        /** @var ?Paiement $paiement */
        $paiement = $paiementRepository->findBy([
            "user" => $user
        ]);


        return $this->render('paiement/payment_story.html.twig', [
            'paiements' => $paiement,

        ]);
    }

}