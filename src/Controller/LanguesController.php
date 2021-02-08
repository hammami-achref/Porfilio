<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

use App\Entity\LANGUES;
use App\Form\LanguesType;
use App\Repository\LANGUESRepository;
use Symfony\Component\HttpFoundation\Request;
use Doctrine\ORM\EntityManagerInterface;

class LanguesController extends AbstractController
{
    /**
     * @Route("/langues", name="langues")
     */
    public function addLangue(Request $request,  Request $request2, EntityManagerInterface $em) :Response
    {

$dp=new  LANGUES();
$form=$this->createForm(LanguesType::class,$dp);
$form->handleRequest($request);


if ($form -> isSubmitted()){

$em->persist($dp);
$em->flush();
return $this->redirectToRoute("centre_interet");
}
 

        return $this->render('langues/index.html.twig',[
            'f'=> $form->createView(),
        ]); 

        
    }

 
}
   




 
  