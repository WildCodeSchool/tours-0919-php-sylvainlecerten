<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;
use App\Entity\Presentation;
use App\Repository\PresentationRepository;
use App\Form\PresentationType;

class IndexController extends AbstractController
{
    /**
    * @Route("/index", name="app_index")
    */
    public function index(PresentationRepository $presRepository) :Response
    {
        $presentations = $presRepository->findAll();

        if (!$presentations) {
            throw $this->createNotFoundException('Aucune information n\'est disponible.');
        }
        return $this->render('presentation.html.twig', [
                'presentations' => $presentations
        ]);
    }
}
