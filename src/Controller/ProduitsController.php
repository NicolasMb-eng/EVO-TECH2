<?php

namespace App\Controller;

use App\Entity\Produits;
use App\Entity\Categories;
use Symfony\Component\Security\Core\User\UserInterface;
use Symfony\Component\Security\Core\User\UserProviderInterface;
use Symfony\Component\Security\Csrf\CsrfToken;
use Symfony\Component\Security\Csrf\CsrfTokenManagerInterface;
use App\Form\ProduitsType;
use App\Repository\CategoriesRepository;
use App\Repository\ProduitsRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\File\Exception\FileException;
use Symfony\Component\HttpFoundation\File\UploadedFile;
use Knp\Component\Pager\PaginatorInterface;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Security\Core\Authentication\Token\TokenInterface;
use Symfony\Component\Security\Http\Authentication\AuthenticationUtils;

/**
 * @Route("/produits")
 */
class ProduitsController extends AbstractController
{

    /**
     * @Route("/", name="produits_index", methods={"GET"})
     */
    public function index(Request $request, PaginatorInterface $paginator,ProduitsRepository $produitsRepository): Response
    {
        $pagination = $paginator->paginate(
            $produitsRepository->findAll(),
            $request->query->getInt("page", 1),
            3
        );
        return $this->render('produits/index.html.twig', [
            'produits' => $pagination,
        ]);
    }

    /**
     * @Route("/singleItem/{id}", name="produits_index_singleItem", methods={"GET"})
     */
    public function singleItem(int $id,ProduitsRepository $produitsRepository,AuthenticationUtils $authenticationUtils): Response
    {
        if($authenticationUtils->getLastUsername())
        {
            return $this->render('produits/single-itemUser.html.twig', [
                'produits' => $produitsRepository->findAll(),
                'produit' => $produitsRepository->find($id),
            ]);
        }
        else{
            return $this->render('produits/index-singleitem.html.twig', [
                'produits' => $produitsRepository->findAll(),
                'produit' => $produitsRepository->find($id),
            ]);
        }

    }

    /**
     * @Route("/affichage_produit", name="affichage_produit")
     */
    public function indexFront(Request $request, PaginatorInterface $paginator,ProduitsRepository $produitsRepository,
                               CategoriesRepository $categoriesRepository,AuthenticationUtils $authenticationUtils): Response
    {

        if ( $request->isMethod('POST')) {
            dd($request->request);
        }


        $pagination = $paginator->paginate(
            $produitsRepository->findAll(),
            $request->query->getInt("page", 1),
            4
        );
        if($authenticationUtils->getLastUsername())
        {
            return $this->render('produits/indexUserfront.html.twig', [
            'produits' => $pagination,
            'categories'=> $categoriesRepository->findAll(),
        ]);
        }
        else{
            return $this->render('produits/index-front.html.twig', [
                'produits' => $pagination,
                'categories'=> $categoriesRepository->findAll(),
            ]);
        }

    }

    /**
     * @Route("/new", name="produits_new", methods={"GET", "POST"})
     */
    public function new(Request $request, EntityManagerInterface $entityManager): Response
    {
        $produit = new Produits();
        $form = $this->createForm(ProduitsType::class, $produit);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $file = $produit->getImage();

            $fileName = md5(uniqid()).'.'.$file->guessExtension();
            $file->move($this->getParameter('image_directory'), $fileName);

            var_dump($request->get("user[imageUser]"));

            $produit->setImage($fileName);
            $entityManager->persist($produit);
            $entityManager->flush();

            return $this->redirectToRoute('acceuil');
        }

        return $this->render('produits/new.html.twig', [
            'produit' => $produit,
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/{id}", name="produits_show", methods={"GET"})
     */
    public function show(Produits $produit): Response
    {
        return $this->render('produits/show.html.twig', [
            'produit' => $produit,
        ]);
    }

    /**
     * @Route("/{id}/edit", name="produits_edit", methods={"GET", "POST"})
     */
    public function edit(Request $request, Produits $produit, EntityManagerInterface $entityManager): Response
    {
        $form = $this->createForm(ProduitsType::class, $produit);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $file = $produit->getImage();

            $fileName = md5(uniqid()).'.'.$file->guessExtension();
            $file->move($this->getParameter('image_directory'), $fileName);

            $produit->setImage($fileName);
            $entityManager->flush();

            return $this->redirectToRoute('produits_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->render('produits/edit.html.twig', [
            'produit' => $produit,
            'form' => $form->createView(),
        ]);
    }
    /**
     * @Route("/{id}/search_produit", name="search_produit")
     */
    public function indexFront1(int $id,ProduitsRepository $produitsRepository, Request $request,
                                CategoriesRepository $categoriesRepository, PaginatorInterface $paginator,AuthenticationUtils $authenticationUtils): Response
    {

        if ( $request->isMethod('POST')) {
            if ( $request->request->get('Search')){
                $categorie = $request->request->get('categorie');
                $produit = $request->request->get('Search');
                $produits = $produitsRepository->findByProduit($produit);
                $pagination = $paginator->paginate(
                    $produits,
                    $request->query->getInt("page", 1),
                    4
                );
                if($authenticationUtils->getLastUsername()) {

                    return $this->render('produits/indexUserfront.html.twig', [
                        'produits' => $pagination,
                        'categories' => $categoriesRepository->findAll(),
                    ]);
                }
                else{
                    return $this->render('produits/index-front.html.twig', [
                        'produits' => $pagination,
                        'categories' => $categoriesRepository->findAll(),
                    ]);
                }
            }
        }

        $pagination = $paginator->paginate(
            $produitsRepository->findByCategorie($id),
            $request->query->getInt("page", 1),
            4
        );
        if($authenticationUtils->getLastUsername()) {

            return $this->render('produits/indexUserfront.html.twig', [
                'produits' => $pagination,
                'categories' => $categoriesRepository->findAll(),
            ]);
        }
        else{
            return $this->render('produits/index-front.html.twig', [
                'produits' => $pagination,
                'categories' => $categoriesRepository->findAll(),
            ]);
        }
    }
    /**
     * @Route("/{id}", name="produits_delete", methods={"POST"})
     */
    public function delete(Request $request, Produits $produit, EntityManagerInterface $entityManager): Response
    {
        if ($this->isCsrfTokenValid('delete'.$produit->getId(), $request->request->get('_token'))) {


            $entityManager->remove($produit);

            $entityManager->flush();
        }

        return $this->redirectToRoute('produits_index', [], Response::HTTP_SEE_OTHER);
    }

}
