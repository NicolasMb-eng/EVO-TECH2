<?php

namespace App\Controller;

use App\Form\EditProfileType;
use App\Repository\UserRepository;
use Doctrine\ORM\EntityManager;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use App\Form\EditProfilType;
use App\Form\EditPasswordType;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Mailer\MailerInterface;
use Symfony\Component\Mime\Email;

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
     * @Route("modifierProfil" , name="modifierProfil")
     */

    public function modifierProfil(\Symfony\Component\HttpFoundation\Request $request)
    {
        $user = $this->getUser();

        $form = $this->createForm(EditProfileType::class , $user);
        $form->handleRequest($request);
        if($form->isSubmitted() && $form->isValid()){

            $em = $this->getDoctrine()->getManager();
            $em->persist($user);
            $em->flush();
            $this->addFlash('message','profil est mise a jour');
            return $this->redirectToRoute('profilUser');


        }

        return $this->render('users/editprofile.html.twig', [
            'form'=>$form->createView(),

        ]);

    }


    /**
     * @Route("modifierMdp" , name="modifierMdp")
     */

    public function modifierMdp(\Symfony\Component\HttpFoundation\Request $request)
    {
        $user = $this->getUser();

        $form = $this->createForm(EditPasswordType::class , $user);
        $form->handleRequest($request);
        if($form->isSubmitted() && $form->isValid()){

            $em = $this->getDoctrine()->getManager();
            $em->persist($user);
            $em->flush();
            $this->addFlash('message','mot de pass est mise a jour');
            return $this->redirectToRoute('profilUser');


        }

        return $this->render('users/editprofile.html.twig', [
            'form'=>$form->createView(),

        ]);

    }
/**
 * @Route ("/Spp/{id}",name="d")
 */
function Delete ($id ,UserRepository $repository)
{
    $user=$repository->find($id);
    $em=$this->getDoctrine()->getManager();
    $em->flush();
    return $this->redirectToRoute("acceuil");


}

    /**
     * @Route ("/AfficheU" , name="AfficheU")
     *
     */

public function Affiche(UserRepository $repository)
{


    $user=$repository->findAll();
    return $this->render('users/afficher.html.twig',

    ['user'=>$user]
    );

}




    /**
     * @Route ("/db/{id}",name="db")
     */
    function Deletee ($id ,UserRepository $repository)
    {
        $user=$repository->find($id);
        $em=$this->getDoctrine()->getManager();
        $em->flush();
        return $this->redirectToRoute("AfficheU");


    }




}
