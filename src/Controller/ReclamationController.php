<?php

namespace App\Controller;

use App\Entity\Reclamation;
use App\Entity\ResponseReclamation;
use App\Form\ReclamationType;
use App\Form\Reclamation1Type;
use App\Repository\ReclamationRepository;
use App\Repository\ResponseReclamationRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Mailer\MailerInterface;
use Symfony\Component\Mime\Email;
use Symfony\Component\Routing\Annotation\Route;


/**
 * @Route("/reclamation")
 */
class ReclamationController extends AbstractController
{
    /**
     * @Route("/aff", name="affichage", methods={"GET"})
     */
    public function indexFront(ReclamationRepository $reclamationRepository): Response
    {
        return $this->render('reclamation/index-reclamationFront.html.twig', [
            'reclamations' => $reclamationRepository->findAll(),
        ]);
    }
    /**
     * @Route("/", name="reclamation_index", methods={"GET"})
     */
    public function index(ReclamationRepository $reclamationRepository): Response
    {
        return $this->render('reclamation/index.html.twig', [
            'reclamations' => $reclamationRepository->findAll(),
        ]);
    }

    /**
     * @Route("/4a8z1d5q1d2", name="searchReclamation", methods={"GET"})
     */
    public function search(ReclamationRepository $reclamationRepository, Request $request): Response
    {
        return $this->render('reclamation/index.html.twig', [
            'reclamations' => $reclamationRepository->search($request->get("search")),
        ]);
    }

    /**
     * @Route("/new", name="reclamation_new", methods={"GET", "POST"})
     */
    public function new(Request $request, EntityManagerInterface $entityManager): Response
    {
        $reclamation = new Reclamation();
        $form = $this->createForm(ReclamationType::class, $reclamation);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $reclamation->setDateCreation(new \DateTime());
            $reclamation->setEtat("En Cours...");
            $entityManager->persist($reclamation);
            $responseReclamation = new ResponseReclamation();
            $responseReclamation->setReclamation($reclamation);
            $responseReclamation->setContent("pas encore ");
            $entityManager->persist($responseReclamation);
            $entityManager->flush();

            return $this->redirectToRoute('reclamation_showFront', ['id' => $reclamation->getId()], Response::HTTP_SEE_OTHER);
        }

        return $this->render('reclamation/new.html.twig', [
            'reclamation' => $reclamation,
            'form' => $form->createView(),
        ]);
    }
    /**
     * @Route("/{id}", name="reclamation_showFront", methods={"GET"})
     */
    public function showFront(ResponseReclamationRepository $repository,Reclamation $reclamation): Response
    {
        return $this->render('reclamation/show-front.html.twig', [
            'reclamation' => $reclamation,
            'response' => $repository->findOneByReclamation($reclamation->getId()),
        ]);
    }
    /**
     * @Route("/{id}", name="reclamation_show", methods={"GET"})
     */
    public function show(Reclamation $reclamation): Response
    {
        return $this->render('reclamation/show.html.twig', [
            'reclamation' => $reclamation,
        ]);
    }

    /**
     * @Route("/{id}/edit", name="reclamation_edit", methods={"GET", "POST"})
     */
    public function edit(Request $request, Reclamation $reclamation, EntityManagerInterface $entityManager): Response
    {
        $form = $this->createForm(ReclamationType::class, $reclamation);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $reclamation->setDateCreation(new \DateTime());
            $entityManager->flush();

            return $this->redirectToRoute('reclamation_showFront', ['id' => $reclamation->getId()], Response::HTTP_SEE_OTHER);
        }

        return $this->render('reclamation/edit.html.twig', [
            'reclamation' => $reclamation,
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/{id}/response", name="responseRec", methods={"GET", "POST"})
     */
    public function responseRec(MailerInterface $mailer, Request $request, $id, ResponseReclamationRepository $repository,EntityManagerInterface $entityManager): Response
    {

        $responseReclamation = $repository->findOneByReclamation($id);

        if ($request->get("submit")) {
            $responseReclamation->setContent($request->get('content'));
            $entityManager->flush();
            // -----------------------------------------
            $email = (new Email())
                ->from('abdessalem.drine@esprit.tn')
                ->to('abdessalem.drine@esprit.tn')
                //->cc('cc@example.com')
                //->bcc('bcc@example.com')
                //->replyTo('fabien@example.com')
                //->priority(Email::PRIORITY_HIGH)
                ->subject('Reclamation EvoTeck')
                ->text($responseReclamation->getContent());
                //->html('<p>See Twig integration for better HTML integration!</p>');

            $mailer->send($email);

            return $this->redirectToRoute('reclamation_index');
        }

        return $this->render('reclamation/reponseReclamation.html.twig', ['id'=>$id,
            'content' => $responseReclamation->getContent()
            ]);
    }

    /**
     * @Route("/{id}", name="reclamation_delete", methods={"POST"})
     */
    public function delete(Request $request, Reclamation $reclamation, EntityManagerInterface $entityManager): Response
    {
        if ($this->isCsrfTokenValid('delete'.$reclamation->getId(), $request->request->get('_token'))) {
            $entityManager->remove($reclamation);
            $entityManager->flush();
        }

        return $this->redirectToRoute('reclamation_index', [], Response::HTTP_SEE_OTHER);
    }

    /**
     * @Route("/delete/{id}", name="reclamation_delete_front", methods={"POST"})
     */
    public function delete_front(Request $request, Reclamation $reclamation, EntityManagerInterface $entityManager): Response
    {
        if ($this->isCsrfTokenValid('delete'.$reclamation->getId(), $request->request->get('_token'))) {
            $entityManager->remove($reclamation);
            $entityManager->flush();
        }

        return $this->redirectToRoute('affichage', [], Response::HTTP_SEE_OTHER);
    }
    /**
     * @Route("/Etat/blablaa", name="traiterReccc")
     */
    function etat(Request $request, ReclamationRepository $repository, EntityManagerInterface $entityManager): Response
    {
        $reclamation=$repository->find($request->get("id"));
        $string = $request->get("string");
        $reclamation->setEtat($string);
        $entityManager->persist($reclamation);
        $entityManager->flush();
            return $this->redirectToRoute('reclamation_index');

    }
}

