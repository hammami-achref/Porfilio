<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;



use App\Entity\PROFIL;
use App\Form\ProfilType;
use App\Repository\PROFILRepository;
use Symfony\Component\HttpFoundation\Request;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\HttpFoundation\File\Exception\FileException;

class ProfilController extends AbstractController
{
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
return $this->redirectToRoute("formation");
}
 

        return $this->render('profil/index.html.twig',[
            'p'=> $form->createView(),
        ]); 
 }

 

 /**
  * @Route("/new",name="profil_new",methods={"GET","POST"})
  */

public function new(Request $request): Response
{
$profil=new PROFIL();
$form=$this->createForm(ProfilType::class,$profil);
$form->handleRequest($request);

if ($form -> isSubmitted() && $form->isValid()){
    $file=$profil->getImage();
    $fileName=md5(uniqid()).'.'.$file->guessExtension();
    try{
        $file->move($this->getParameter('images_directory'),
        $fileName);
    }
    catch (FileException $e){}
    $entityManager=$this->getDoctrine()->getManager();
    $profil->setImage($fileName);
    $entityManager->persist($profil);
    $entityManager->flush();

   

return $this->redirectToRoute('Home');

}}




 

 
}
