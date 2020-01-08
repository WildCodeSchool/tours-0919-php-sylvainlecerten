<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;
use App\Entity\Content;
use App\Entity\Service;
use App\Repository\ServiceRepository;
use App\Repository\ContentRepository;

class IndexController extends AbstractController
{
    /**
    * @Route("/", name="app_index")
    */
    public function index(ContentRepository $contentRepository, ServiceRepository $serviceRepository) :Response
    {
        $whoAmIContents = $contentRepository->findBy(
            ['category' => 'whoami'],
            ['ordering' => 'ASC']
        );
        $presentationContents = $contentRepository->findBy(
            ['category' => 'presentation'],
            ['ordering' => 'ASC']
        );

        $services = $serviceRepository->findAll();

        dump($services);
        return $this->render('index/index.html.twig', [
            'whoAmIContents' => $whoAmIContents,
            'presentationContents' => $presentationContents,
            'services' => $services
        ]);
    }
}
