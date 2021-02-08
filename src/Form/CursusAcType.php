<?php

namespace App\Form;

use App\Entity\CURSUSACADEMIQUE;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;

class CursusAcType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('etablissement')
            ->add('ville')
            ->add('Date_deb_formation')
            ->add('Date_fin_formation')
            ->add('nIVEAU')
            ->add('Suivant',SubmitType::class)
        ;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => CURSUSACADEMIQUE::class,
        ]);
    }
}
