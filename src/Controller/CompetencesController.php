<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use App\Entity\COMPETENCE;
use App\Form\CompetenceType;
use App\Repository\COMPETENCERepository;
use Symfony\Component\HttpFoundation\Request;
use Doctrine\ORM\EntityManagerInterface;

class CompetencesController extends AbstractController
{
    /**
     * @Route("/competences", name="competences")
     */
     
         
        public function addCompetences(Request $request,  Request $request2, EntityManagerInterface $em) :Response
        {
    
    $dp=new  COMPETENCE();
    $form=$this->createForm(CompetenceType::class,$dp);
    $form->handleRequest($request);
    
    
    if ($form -> isSubmitted()){
    
    $em->persist($dp);
    $em->flush();
    return $this->redirectToRoute("langues");
    }
     
    
            return $this->render('competences/index.html.twig',[
                'f'=> $form->createView(),
            ]); 
    
            
        }
    

     
    }
    

