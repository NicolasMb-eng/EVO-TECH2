<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Security\Http\Authentication\AuthenticationUtils;

class AcceuilController extends AbstractController
{
    /**
     * @Route("/acceuil", name="acceuil")
     * @return Response
     */
    public function index(AuthenticationUtils $authenticationUtils): Response
    {
        if($authenticationUtils->getLastUsername()) {
            return $this->render('acceuil/acceuilUser.html.twig', [
                'controller_name' => 'AcceuilController',
            ]);
        }
        else {
            return $this->render('acceuil/acceuil.html.twig', [
                'controller_name' => 'AcceuilController',
            ]);
        }
    }
    /**
     * @Route("/acceuilUser", name="acceuilUser")
     * @return Response
     */
    public function indexAcceuil(): Response
    {
        return $this->render('acceuil/acceuilUser.html.twig', [
            'controller_name' => 'AcceuilController',
        ]);
    }

}
