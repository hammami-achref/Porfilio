<?php

namespace App\Controller;

use App\Entity\ACCEUIL;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;


use App\Entity\DETAILSPERSONEL;
use App\Entity\PROFIL;
use App\Form\FormCVType;
use App\Form\ProfilType;
use App\Repository\CENTRESDINTERETRepository;
use App\Repository\COMPETENCERepository;
use App\Repository\CURSUSACADEMIQUERepository;
use App\Repository\DETAILSPERSONELRepository;
use App\Repository\EXPERIENCERepository;
use App\Repository\LANGUESRepository;
use App\Repository\PROFILRepository;
use Symfony\Component\HttpFoundation\Request;
use Doctrine\ORM\EntityManagerInterface;


class AddController extends AbstractController
{
    
 
 

     /**
     * @Route("/Home", name="add")
     */
 
    public function index(): Response
    {
        return $this->render('Home/index.html.twig', [
            'controller_name' => 'AddController',
        ]);
    }

      /**
     * @Route("/cv", name="cv")
     */


    public function ListDepartement(CENTRESDINTERETRepository $repo , COMPETENCERepository $repo2 ,CURSUSACADEMIQUERepository $repo3 ,DETAILSPERSONELRepository $repo4, EXPERIENCERepository $repo5, LANGUESRepository $repo6, PROFILRepository $repo7) :Response
    {
$list=$repo->findAll();
$list2=$repo7->findAll();
        return $this->render('add/AfficherCV.html.twig',[
            'list'=> $list,'list2'=> $list2,
        ]); 
    }



   /**
     * @Route("/details_personel", name="details_personel")
     */
    public function Det_personnel(Request $request,  Request $request2, EntityManagerInterface $em) :Response
    {

$dp=new DETAILSPERSONEL();
$form=$this->createForm(FormCVType::class,$dp);
$form->handleRequest($request);


if ($form -> isSubmitted()){

$em->persist($dp);
$em->flush();
return $this->redirectToRoute("Home");
}
 

        return $this->render('Home/index.html.twig',[
            'f'=> $form->createView(),
        ]); 

    }



    
    /**
     * @Route("/profil", name="profil")
     */
    

    public function addProfil(Request $request,  Request $request2, EntityManagerInterface $em) :Response
    {

$dp=new PROFIL();
$form=$this->createForm(ProfilType::class,$dp);
$form->handleRequest($request);


if ($form -> isSubmitted()){

$em->persist($dp);
$em->flush();
return $this->redirectToRoute("Home");
}
 

        return $this->render('Home/index.html.twig',[
            'p'=> $form->createView(),
        ]); 

        
    }





}
