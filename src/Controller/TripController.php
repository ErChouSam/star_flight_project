<?php

namespace App\Controller;

use App\Entity\Trips;
use App\Form\TripsType;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class TripController extends AbstractController
{
    /**
     * @Route("/trip", name="trip")
     * @param EntityManagerInterface $em
     * @return Response
     */
    public function index(EntityManagerInterface $em)
    {
        $trips = $em->getRepository(Trips::class)->findAll();

        return $this->render('trip/index.html.twig', [
            'controller_name' => 'TripController',
            'trips' => $trips
        ]);
    }

    /**
     * @Route("/trip/new", name="NewTrip")
     * @param EntityManagerInterface $em
     * @param Request $request
     * @return Response
     */
    public function NewTrip(EntityManagerInterface $em,Request $request){

        $trip = new Trips();
        $form = $this->createForm(TripsType::class, $trip);

        $form->handleRequest($request);
        if ($form->isSubmitted() && $form->isValid()) {
            // $form->getData() holds the submitted values
            // but, the original `$task` variable has also been updated
            $task = $form->getData();

            // ... perform some action, such as saving the task to the database
            // for example, if Task is a Doctrine entity, save it!
            // $entityManager = $this->getDoctrine()->getManager();
            // $entityManager->persist($task);
            // $entityManager->flush();

            dump($request);
        }

        return $this->render('trip/createtrip.html.twig',[
            'controller_name' => 'TripController',
            'form' => $form->createView()
        ]);
    }
}
