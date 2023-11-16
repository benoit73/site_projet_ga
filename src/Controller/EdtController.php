<?php

namespace App\Controller;

use App\Repository\CoursRepository;
use App\Repository\EdtRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class EdtController extends AbstractController
{
    #[Route('/edt', name: 'app_edt')]
    public function index(CoursRepository $repo): Response
    {
        $cour = $repo -> findAll();
        return $this->render('edt/index.html.twig', [
            'controller_name' => 'EdtController',
            'cours' => $cour,
        ]);
    }
}
