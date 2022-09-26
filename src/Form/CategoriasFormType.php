<?php

namespace App\Form;

use App\Entity\Categorias;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class CategoriasFormType extends AbstractType
{
    //esta funcion se encarga de comprobar que todo es correcto.
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        //Le estoy diciendo con TextType que la clase categoria tiene que ser necesariamente un texto
        $builder
            ->add('categoria', TextType::class)
        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Categorias::class,
        ]);
    }
}
