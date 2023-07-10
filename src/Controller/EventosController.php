<?php

namespace App\Controller;

use App\Entity\Eventos;
use App\Form\EventosType;
use App\Repository\EventosRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

#[Route('/eventos')]
class EventosController extends AbstractController
{
    #[Route('/', name: 'app_eventos_index', methods: ['GET', 'POST'])]
    public function index(EventosRepository $eventosRepository): Response
    {   
        $eventos = $eventosRepository->findAll();
        
       return $this->render('eventos/index.html.twig', [
            'eventos' => $eventos,
            
           
        ]);
       
    }

    #[Route('/new', name: 'app_eventos_new', methods: ['GET', 'POST'])]
    public function new(Request $request, EventosRepository $eventosRepository): Response
    {

        $evento = new Eventos();
        $form = $this->createForm(EventosType::class, $evento);
        $form->handleRequest($request);
        

        if ($form->isSubmitted() && $form->isValid()) {
            $eventosRepository->save($evento, true);

            return $this->redirectToRoute('app_eventos_index', [], Response::HTTP_SEE_OTHER);
           
            
        }

        return $this->render('eventos/new.html.twig', [
            'evento' => $evento,
            'form' => $form,
           
        ]);
    }

    #[Route('/{id}', name: 'app_eventos_show', methods: ['GET'])]
    public function show(Eventos $evento): Response
    {
        return $this->render('eventos/show.html.twig', [
            'evento' => $evento,
        ]);
    }

    #[Route('/{id}/edit', name: 'app_eventos_edit', methods: ['GET', 'POST'])]
    public function edit(Request $request, Eventos $evento, EventosRepository $eventosRepository): Response
    {
        $form = $this->createForm(EventosType::class, $evento);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $eventosRepository->save($evento, true);

            return $this->redirectToRoute('app_eventos_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->renderForm('eventos/edit.html.twig', [
            'evento' => $evento,
            'form' => $form,
        ]);
    }

    #[Route('/{id}', name: 'app_eventos_delete', methods: ['POST'])]
    public function delete(Request $request, Eventos $evento, EventosRepository $eventosRepository): Response
    {
        if ($this->isCsrfTokenValid('delete'.$evento->getId(), $request->request->get('_token'))) {
            $eventosRepository->remove($evento, true);
        }

        return $this->redirectToRoute('app_eventos_index', [], Response::HTTP_SEE_OTHER);
    }
}
