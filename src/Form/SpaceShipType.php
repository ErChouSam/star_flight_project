<?php

namespace App\Form;

use App\Entity\SpaceShip;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class SpaceShipType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('Name',EntityType::class,[
                'class' => SpaceShip::class,
                'label' => 'Spaceship : ',
                'choice_label' => 'name',
                'placeholder' => 'Choisir un vaisseau',
                'multiple' => false,
            ])
        ;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => SpaceShip::class,
        ]);
    }
}
