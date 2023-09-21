<?php

namespace App\Controller;

use App\Entity\Post;
use Doctrine\ORM\EntityManagerInterface;
use App\Form\PostType;


use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;

class PostController extends AbstractController
{
    #[Route('/post/crear', name: 'post_create', methods: ['GET', 'POST'])]
    public function create(Request $peticion, EntityManagerInterface $entityManager): Response
    {
        $form = $this->createForm(PostType::class);

        $form->handleRequest($peticion);
        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager->persist($form->getData());
            $entityManager->flush();

            $this->addFlash('succes', 'Publicacion guardada con exito');
            return $this->redirectToRoute('post_create');
        }


        return $this->render('post/create.html.twig', [
            'form' => $form->createView(),
        ]);
    }


    #[Route('/post/{id}/editar', name: 'post_edit', methods: ['GET', 'POST'])]
    public function editar(Post $publicacion, Request $peticion, EntityManagerInterface $entityManager): Response
    {
        $form = $this->createForm(PostType::class, $publicacion);


        $form->handleRequest($peticion);
        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager->flush();

            $this->addFlash('succes', 'Publicacion editada con exito');
            return $this->redirectToRoute('post_edit', [
                'id' => $publicacion->getId()
            ]);
        }


        return $this->render('post/edit.html.twig', [
            'form' => $form->createView(),
        ]);
    }
}
