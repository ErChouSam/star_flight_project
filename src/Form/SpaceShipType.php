<?php

namespace App\Form;

use App\Entity\SpaceShip;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class SpaceShipType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('Name')
            ->add('IMG_URL')
            ->add('Description')
            ->add('Capacity')
            ->add('Speed')
            ->add('Protect')
            ->add('CruiseType')
        ;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => SpaceShip::class,
        ]);
    }
}
