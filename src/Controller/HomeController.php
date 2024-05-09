<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use ErrorException;

class HomeController extends AbstractController
{
 
    public function __construct() {
        set_error_handler([$this, 'handleErrors']);
    }

    public function handleErrors($severity, $message, $file, $line) {
        if (!(error_reporting() & $severity)) {
            return;
        }
        if (strpos($message, 'assert.warning') !== false) {
            return;
        }
        throw new ErrorException($message, 0, $severity, $file, $line);
    }

    #[Route('/', name: 'app_home')]
    public function index(): Response
    {

        return $this->render('home/index.html.twig', [
            'controller_name' => 'HomeController',
        ]);
    }
}
