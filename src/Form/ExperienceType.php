<?php

namespace App\Form;

use App\Entity\EXPERIENCE;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
class ExperienceType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('poste')
            ->add('employeur')
            ->add('ville_exp')
            ->add('Date_deb_experience')
            ->add('Date_fin_experience')
            ->add('description')
            ->add('Suivant',SubmitType::class);
        ;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => EXPERIENCE::class,
        ]);
    }
}
