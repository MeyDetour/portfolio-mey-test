<?php

namespace App\Controller;

use App\Entity\Project;
use App\Entity\Quality;
use App\Form\ProjetType;
use App\Form\QualityType;
use App\Repository\ProjectRepository;
use App\Repository\QualityRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

#[Route('/profile')]
class QualityController extends AbstractController
{
    #[Route('/quality', name: 'qualities')]
    public function index(QualityRepository $qualityRepository): Response
    {
        $qualities = $qualityRepository->findAll();
        if(count($qualities)==0){
            return $this->redirectToRoute('new_quality');
        }
        return $this->render('quality/index.html.twig', [
            'qualities'=> $qualities

        ]);
    }
    #[Route('/quality/new', name: 'new_quality')]
    public function new(QualityRepository $repository,EntityManagerInterface $manager , Request $request): Response
    {

        $quality = new Quality();
        $form = $this->createForm(QualityType::class,$quality);
        $form->handleRequest($request);
        if($form->isSubmitted() && $form->isValid()){
            $manager->persist($quality);
            $manager->flush();
            return $this->redirectToRoute('qualities');
        }
        return $this->render('quality/add.html.twig', [
            'form'=> $form->createView()
        ]);
    }
    #[Route('/quality/edit/{id}', name: 'edit_quality')]
    public function edit(EntityManagerInterface $manager ,Quality $quality ,Request $request): Response
    {

        $form = $this->createForm(QualityType::class,$quality);
        $form->handleRequest($request);
        if($form->isSubmitted() && $form->isValid()){
            $manager->persist($quality);
            $manager->flush();
            return $this->redirectToRoute('qualities');
        }
        return $this->render('quality/add.html.twig', [
            'form'=> $form->createView(),
            "quality"=>$quality
        ]);
    }
    #[Route('/quality/remove/{id}', name: 'remove_quality')]
    public function remove(EntityManagerInterface $manager ,Quality $quality): Response
    {

       $manager->remove($quality);
       $manager->flush();
       return  $this->redirectToRoute('qualities');
    }
}
//  <a href="{{ path('remove_quality',{'id':quality.id}) }}">Supprimer</a>
//