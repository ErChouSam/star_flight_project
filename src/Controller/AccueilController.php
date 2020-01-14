<?php

namespace App\Controller;

use App\Entity\SpaceShip;
use App\Entity\User;
use Doctrine\ORM\EntityManagerInterface;
use Doctrine\ORM\ORMException;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class AccueilController extends AbstractController
{
    /**
     * @Route("/", name="accueil")
     * @param EntityManagerInterface $em
     * @return Response
     */
    public function index(EntityManagerInterface $em)
    {
        return $this->render('accueil/index.html.twig', [
            'controller_name' => 'AccueilController',
        ]);
    }

    /**
     * @Route("/reservation_create", name="reservation_create", methods={"post"})
     * @param EntityManagerInterface $em
     * @param Request $request
     * @return Response
     */
    public function reservation(EntityManagerInterface $em, Request $request){
        return $this->redirectToRoute('reservation', $request->request->all());
    }

}
