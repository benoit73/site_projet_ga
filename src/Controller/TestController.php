<?php

namespace App\Controller;

use App\Entity\Eleves; // Assurez-vous d'importer votre entité
use App\Repository\ElevesRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Doctrine\Persistence\ManagerRegistry;
class TestController extends AbstractController
{
    #[Route('/test', name: 'app_test')]
    public function index(ElevesRepository $repo): Response
    {
        $eleve = $repo->findAll();
        return $this->render('test/index.html.twig', [
            'eleve' => $eleve,
        ]);
    }

 
}
