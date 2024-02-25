<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\RedirectResponse;
use Symfony\Component\Routing\Attribute\Route;

class HomeController extends AbstractController
{
    #[Route('/', name: 'app_home')]
    public function index(): Response
    {
        // Check if the user is logged in by trying to get the User object
        if ($this->getUser()) {
            // Optionally, check for specific roles
            // if ($this->isGranted('ROLE_ADMIN')) {
                return $this->redirectToRoute('admin');
            // }

            // If you want to redirect users with different roles to different pages,
            // you can add more conditions here
        }
   
        return $this->render('home/index.html.twig', [
            'controller_name' => 'HomeController',
        ]);
    }
}
