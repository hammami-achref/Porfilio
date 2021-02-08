<?php

namespace App\Form;

use App\Entity\ACCEUIL;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class AcceuilType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
        ->add('Save',SubmitType::class)
        ->add('b',SubmitType::class)
        ->add('v',SubmitType::class)
        ->add('d',SubmitType::class)
        ;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => ACCEUIL::class,
        ]);
    }
}
