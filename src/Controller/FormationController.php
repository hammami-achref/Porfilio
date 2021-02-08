<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

use App\Entity\CURSUSACADEMIQUE;
use App\Form\CursusAcType;
use App\Repository\CURSUSACADEMIQUERepository;
use Symfony\Component\HttpFoundation\Request;
use Doctrine\ORM\EntityManagerInterface;

class FormationController extends AbstractController
{
    /**
     * @Route("/formation", name="formation")
     */
     
    public function addFormation(Request $request,  Request $request2, EntityManagerInterface $em) :Response
    {

$dp=new  CURSUSACADEMIQUE();
$form=$this->createForm(CursusAcType::class,$dp);
$form->handleRequest($request);


if ($form -> isSubmitted()){

$em->persist($dp);
$em->flush();
return $this->redirectToRoute("experience");
}
 

        return $this->render('formation/index.html.twig',[
            'f'=> $form->createView(),
        ]); 

        
    }

 
}
