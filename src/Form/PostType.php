<?php

namespace App\Form;

use App\Entity\Category;
use App\Entity\Post;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
//use Symfony\Component\Form\Extension\Core\Type\ChoiceType;

class PostType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('category',EntityType::class,[
                'class'       => Category::class,
                'placeholder' => 'Seleccione una...', 
                'label'       => 'Categorias:',
                'required'    => false
            ]) 
            ->add('tittle', TextType::class, [
                'label' => 'Titulo de la publicacion:',
                'help'  => 'Piensa en el SEO ¿Como buscarias en Google?',
                'required'    => false
            ])
            ->add('body', TextareaType::class, [
                'label'       => 'Contenido:',
                'attr'        => ['rows' => 9, 'class' => 'bg-ligth'],
                'required'    => false
            ])
            ->add('Enviar', SubmitType::class, [
                'attr' => ['class' => 'btn-dark']
            ]);
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Post::class,
            //'csrf_protection' => false
        ]);
    }
}


/* Para trabajar de manera estatica con las categorias

->add('category',ChoiceType::class,[
                'choices' => [
                      'Lenguages' => [
                        'PHP' => 'php'
                      ],
                      'Frameworks' => [
                        'Laravel' => 'laravel',
                        'Symfony' => 'symfony'
                      ]
                ],
                'placeholder' => 'Seleccione una...',
                'label' => 'Categorias:'
            ])
*/