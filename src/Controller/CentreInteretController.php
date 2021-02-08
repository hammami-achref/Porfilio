<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use App\Entity\CENTRESDINTERET;
use App\Form\CentreInType;
use App\Repository\CENTRESDINTERETRepository;
use Symfony\Component\HttpFoundation\Request;
use Doctrine\ORM\EntityManagerInterface;

class CentreInteretController extends AbstractController
{
    /**
     * @Route("/centre_interet", name="centre_interet")
     */
    
   public function addCENTRE(Request $request,  Request $request2, EntityManagerInterface $em) :Response
        {
    
    $dp=new  CENTRESDINTERET();
    $form=$this->createForm(CentreInType::class,$dp);
    $form->handleRequest($request);
    
    
    if ($form -> isSubmitted()){
    
    $em->persist($dp);
    $em->flush();
    return $this->redirectToRoute("cv");
    }
     
    
            return $this->render('centre_interet/index.html.twig',[
                'f'=> $form->createView(),
            ]); 
    
            
        }
    

     
    }
    

