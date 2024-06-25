<?php

namespace App\Controller;

use App\Entity\Certification;
use App\Form\CertificationType;
use App\Repository\CertificationRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

#[Route('/profile')]
class CertificationController extends AbstractController
{
    #[Route('/certifis', name: 'certifications')]
    public function show(CertificationRepository $certificationRepository): Response
    {
    $certifs = $certificationRepository->findAll(); $coucou = 'coucou';
    if(count($certifs)==0){
        return $this->redirectToRoute('new_certification');
    }
        return $this->render('certification/index.html.twig', [
            'certifs'=> $certifs

        ]);
    }
    #[Route('/certification/new', name: 'new_certification')]
    public function new(CertificationRepository $repository,EntityManagerInterface $manager , Request $request): Response
    {

        $certification = new Certification();
        $form = $this->createForm(CertificationType::class,$certification);
        $form->handleRequest($request);
        if($form->isSubmitted() && $form->isValid()){
            $manager->persist($certification);
            $manager->flush();
            return $this->redirectToRoute('certifications');
        }
        return $this->render('certification/add.html.twig', [
            'form'=> $form->createView()
        ]);
    }
    #[Route('/certification/edit/{id}', name: 'edit_certification')]
    public function edit(EntityManagerInterface $manager ,Certification $certification ,Request $request): Response
    {

        $form = $this->createForm(CertificationType::class,$certification);
        $form->handleRequest($request);
        if($form->isSubmitted() && $form->isValid()){
            $manager->persist($certification);
            $manager->flush();
            return $this->redirectToRoute('certifications');
        }
        return $this->render('certification/add.html.twig', [
            'form'=> $form->createView(),
            "certification"=>$certification
        ]);
    }
    #[Route('/certification/remove/{id}', name: 'remove_certification')]
    public function remove(EntityManagerInterface $manager ,Certification $certification): Response
    {

        $manager->remove($certification);
        $manager->flush();
        return  $this->redirectToRoute('certifications');
    }
}
//  <a href="{{ path('remove_quality',{'id':quality.id}) }}">Supprimer</a>
//