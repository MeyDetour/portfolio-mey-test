<?php

namespace App\Controller;

use App\Entity\Certification;
use App\Entity\LastProject;
use App\Form\CertificationType;
use App\Form\LastProjectType;
use App\Repository\CertificationRepository;
use App\Repository\LastProjectRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

#[Route('/profile')]
class LastProjectController extends AbstractController
{
    #[Route('/lastProject', name: 'lastProject')]
    public function show(LastProjectRepository $repository): Response
    {
        $projs = $repository->findAll();
        if(count($projs)==0){
            return $this->redirectToRoute('new_last_project');
        }
        return $this->render('last_project/index.html.twig', [
            'proj'=> $projs[0]

        ]);
    }
    #[Route('/lastProject/new', name: 'new_last_project')]
    public function new(EntityManagerInterface $manager , Request $request): Response
    {

        $proj = new LastProject();
        $form = $this->createForm(LastProjectType::class,$proj);
        $form->handleRequest($request);
        if($form->isSubmitted() && $form->isValid()){
            $manager->persist($proj);
            $manager->flush();
            return $this->redirectToRoute('lastProject');
        }
        return $this->render('last_project/add.html.twig', [
            'form'=> $form->createView()
        ]);
    }
    #[Route('/lastProject/edit/{id}', name: 'edit_last_project')]
    public function edit(EntityManagerInterface $manager ,LastProject $lastProject,Request $request): Response
    {

        $form = $this->createForm(LastProjectType::class,$lastProject);
        $form->handleRequest($request);
        if($form->isSubmitted() && $form->isValid()){
            $manager->persist($lastProject);
            $manager->flush();
            return $this->redirectToRoute('lastProject');
        }
        return $this->render('last_project/add.html.twig', [
            'form'=> $form->createView(),
            "proj"=>$lastProject
        ]);
    }
    #[Route('/lastProject/remove/{id}', name: 'remove_last_project')]
    public function remove(EntityManagerInterface $manager ,LastProject $project): Response
    {

        $manager->remove($project);
        $manager->flush();
        return  $this->redirectToRoute('lastProject');
    }
}
//  <a href="{{ path('remove_quality',{'id':quality.id}) }}">Supprimer</a>
//