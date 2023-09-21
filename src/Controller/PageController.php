<?php

namespace App\Controller;

use App\Entity\Post;
use App\Controller\PostController;
use Doctrine\ORM\EntityManagerInterface;

use App\Form\ContactosType;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;

use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;



class PageController extends AbstractController
{
    #[Route('/', name:'index', methods: ['GET'])]
    public function index(EntityManagerInterface $entityManager): Response
    {
        return $this->render('page/index.html.twig',[
            'posts' => $entityManager->getRepository(Post::class)->findAll()

        ]);
    } 


    #[Route('/contacto-v1', name:'contact-v1', methods: ['GET', 'POST'])]
    public function contactoV1(Request $peticion): Response
    {
        /*
         * Creamos el formulario con createFormBuilder() y agregamos sus distintos elementos;
         */
        $contactoForm = $this->createFormBuilder()
            ->add('email', TextType::class)
            ->add('message', TextareaType::class, [
                'label' => 'Comentario - Opinion - Mensaje'
            ])
            ->add('send', SubmitType::class, [
                'label' => 'Enviar'
            ])
            ->getForm();

        /*
         * Procesamos la peticion
         */
        $contactoForm->handleRequest($peticion);
        if ($contactoForm->isSubmitted()) {
            // getData(), contiene todo los valores que se han enviados en el formulario;
            // dd($contactoForm->getData(), $peticion);
            $this->addFlash('succes', 'Prueba Form #1 exitosa');
            return $this->redirectToRoute('contact-v1');

        }

        /*
         * Retornamos nuestro formulario renderizado con la vista; 
         */
        return $this->render('page/contacto-v1.html.twig', [
            'contactoForm' => $contactoForm->createView(),
        ]);
    }

    #[Route('/contacto-v2', name:'contact-v2', methods: ['GET', 'POST'])]
    public function contactoV2(Request $peticion): Response
    {
        $contactoForm = $this->createForm(ContactosType::class);//Crea una isntancia del formulario

        $contactoForm->handleRequest($peticion);
        if ($contactoForm->isSubmitted()) {
            //dd($contactoForm->getData());
            $this->addFlash('succes', 'Prueba Form #2 exitosa');
            return $this->redirectToRoute('contact-v2');

        }

        return $this->render('page/contacto-v2.html.twig', [ // Lo rederiza con la vista y lo retorna
            'contactoForm' => $contactoForm->createView(),
        ]);
    }

    #[Route('/contacto-v3', name:'contact-v3', methods: ['GET', 'POST'])]
    public function contactoV3(Request $peticion): Response
    {
        $contactoForm = $this->createForm(ContactosType::class);

        $contactoForm->handleRequest($peticion);
        if ($contactoForm->isSubmitted()) {
            // dd($contactoForm->getData());
            $this->addFlash('info', 'Prueba Form #3 exitosa');
            return $this->redirectToRoute('contact-v3');

        }

        return $this->render('page/contacto-v3.html.twig', [
            'contactoForm' => $contactoForm->createView(),
        ]);
    }
}
