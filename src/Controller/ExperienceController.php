<?php

namespace App\Controller;

use App\Entity\EXPERIENCE;
use App\Form\ExperienceType;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\HttpFoundation\Request;


class ExperienceController extends AbstractController
{
    /**
     * @Route("/experience", name="experience")
     */
     
    public function addExperience(Request $request,  Request $request2, EntityManagerInterface $em) :Response
    {

$dp=new  EXPERIENCE();
$form=$this->createForm(ExperienceType::class,$dp);
$form->handleRequest($request);


if ($form -> isSubmitted()){

$em->persist($dp);
$em->flush();
return $this->redirectToRoute("competences");
}
 

        return $this->render('experience/index.html.twig',[
            'f'=> $form->createView(),
        ]); 

}}
