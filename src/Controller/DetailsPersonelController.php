<?php

namespace App\Controller;

use App\Entity\CENTRESDINTERET;
use App\Entity\COMPETENCE;
use App\Entity\CURSUSACADEMIQUE;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

use App\Entity\DETAILSPERSONEL;
use App\Entity\EXPERIENCE;
use App\Entity\LANGUES;
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

class DetailsPersonelController extends AbstractController
{
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
return $this->redirectToRoute("profil");
}
 

        return $this->render('details_personel/index.html.twig',[
            'f'=> $form->createView(),
        ]); 

    }

    
      /**
     * @Route("/cv", name="cv")
     */


    public function ListDepartement(DETAILSPERSONELRepository $repo , PROFILRepository $rp , CURSUSACADEMIQUERepository $F, 
    EXPERIENCERepository $E, COMPETENCERepository $C , LANGUESRepository $L , CENTRESDINTERETRepository $CI ) :Response
    {
$list=$repo->findAll();
$list2=$rp->findAll();
$list3=$F->findAll();
$list4=$E->findAll();
$list5=$C->findAll();
$list6=$L->findAll();
$list7=$CI->findAll();
        return $this->render('centre_interet/cv.html.twig',[
            'list'=> $list,  'list2'=> $list2, 'list3'=> $list3,'list4'=> $list4, 'list5'=> $list5, 'list6'=> $list6,'list7'=> $list7,
        ]); 
    }



    
       
      /**
     * @Route("/update/{id}", name="updateDepartement")
     */


    public function UpdateDepartement(DETAILSPERSONELRepository $repo , PROFILRepository $rp , CURSUSACADEMIQUERepository $F, 
    EXPERIENCERepository $E, COMPETENCERepository $C , LANGUESRepository $L , CENTRESDINTERETRepository $CI , $id,$id1,$id2,$id3,$id4,$id5,$id6, Request $request, 
    Request $request2 , Request $request3 ,Request $request4, Request $request5 ,Request $request6, Request $request7, EntityManagerInterface  $em,
    EntityManagerInterface  $em2,EntityManagerInterface  $em3,EntityManagerInterface  $em4,EntityManagerInterface  $em5,EntityManagerInterface  $em6,
    EntityManagerInterface  $em7) :Response
    {
 
$dp=new DETAILSPERSONEL();
$dp2=new PROFIL();
$dp3=new CURSUSACADEMIQUE();
$dp4=new EXPERIENCE();
$dp5=new COMPETENCE();
$dp6=new LANGUES();
$dp7=new CENTRESDINTERET();

$dp=$repo->find($id);

$dp2=$rp->find($id6);
$d3=$F->find($id1);
$dp4=$E->find($id2);
$dp5=$C->find($id3);
$dp6=$L->find($id4);
$dp7=$CI->find($id5);

$form=$this->createForm(FormCVType::class,$dp);
 
$form2=$this->createForm(ProfilType::class,$dp2);
$form3=$this->createForm(CursusAcType::class,$dp3);
$form4=$this->createForm(ExperienceType::class,$dp4);
$form5=$this->createForm(CompetenceType::class,$dp5);
$form6=$this->createForm(LanguesType::class,$dp6);
$form7=$this->createForm(CentreInTypeype::class,$dp7);

$form->handleRequest($request);
if ($form -> isSubmitted()){
 
$em->flush();
return $this->redirectToRoute("listDepartement");
}
$list=$repo->findAll();
        return $this->render('departement/add.html.twig',[
            'f'=> $form->createView(),
        ]);  
    }







 /**
     * @Route("/Home", name="Home")
     */
    public function listab(): Response
    {
        $list=$this->getDoctrine()->getRepository(Det_personnel::class)->findAll();
        return $this->render('Home/index.html.twig', [
            'list' => $list,
        ]);
    }

}
