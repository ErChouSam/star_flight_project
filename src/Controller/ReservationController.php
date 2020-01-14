<?php

namespace App\Controller;

use App\Entity\Planet;
use http\Client\Request;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class ReservationController extends AbstractController
{
    /**
     * @Route("/reservation", name="reservation")
     */
    public function index()
    {
        $planet = $this->getDoctrine()->getRepository(Planet::class)->findBy(['Name' => $_GET['select_planet']]);
        return $this->render('reservation/index.html.twig', [
            'controller_name' => 'ReservationController',
            'select_planet' => $planet[0]->getValue(),
            'date_aller' => $_GET['date_aller'],
            'date_retour' => $_GET['date_retour'],
            'voyageur' => $_GET['voyageur']
        ]);
    }
}
