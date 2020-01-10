<?php

namespace App\Form;

use App\Entity\SpaceShip;
use App\Entity\Trips;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\CollectionType;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class TripsType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('Type',ChoiceType::class,[
                'choices' => [
                    'Cargo' => 0,
                    'Voyageur' => 1
                ]
            ])
            ->add('DepartureDate',DateType::class)
            ->add('ArrivalDate',DateType::class)
            ->add('Origin',TextType::class)
            ->add('Arrival',TextType::class)
            ->add('SpaceShip',SpaceShipType::class,[
                'label' => false
            ])
            ->add('submit',SubmitType::class)
        ;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => Trips::class,
        ]);
    }
}
