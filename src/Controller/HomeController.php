<?php

namespace App\Controller;

use App\Repository\EventosRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class HomeController extends AbstractController
{
    #[Route('/', name: 'app_home', methods: ['GET', 'POST'])]
    public function index(EventosRepository $eventosRepository ): Response
    {

        $eventos = $eventosRepository->findAll();

        $listaEventos = [];

        foreach($eventos as $evento){
            $listaEventos[]= [
                'id' => $evento->getId(),
                'start' => $evento->getFecha()->format('Y-m-d h:i:s'),
                'title' =>$evento->getNombre()

            ];
        }
        $data = json_encode($listaEventos);
        return $this->render('home/index.html.twig', compact('data'));
       
    }
}
