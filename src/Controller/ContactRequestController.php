<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class ContactRequestController extends AbstractController
{
    #[Route('/contact/request', name: 'app_contact_request')]
    public function index(): Response
    {
        return $this->render('contact_request/index.html.twig', [
            'controller_name' => 'ContactRequestController',
        ]);
    }
}
