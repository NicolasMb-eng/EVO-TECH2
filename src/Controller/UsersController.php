<?php

namespace App\Controller;

use Doctrine\ORM\EntityManager;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use App\Form\EditProfilType;
use Symfony\Component\Routing\Annotation\Route;

class UsersController extends AbstractController
{
    /**
     * @Route("/profilUser", name="profilUser")
     */
    public function profilUser(): Response
    {
        return $this->render('users/profilUser.html.twig', [
            'controller_name' => 'UsersController',
        ]);
    }





    /**
     * @Route("/modifierProfil" , name="modifierProfil")
     */

    public function modifierProfil(\Symfony\Component\HttpFoundation\Request $request)
    {
        $user = $this->getUser();

        $form = $this->createForm(EditProfilType::class , $user);
        $form->handleRequest($request);
        if($form->isSubmitted() && $form->isValid()){

            $em = $this->getDoctrine()->getManager();
            $em->persist($user);
            $em->flush();
            $this->addFlash('message','profil est mise a jour');
            return $this->redirectToRoute('ProfilUser');


        }

        return $this->render('users/editprofile.html.twig', [
            'form'=>$form->createView(),

        ]);

    }







}
