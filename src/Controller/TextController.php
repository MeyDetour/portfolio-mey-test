<?php

namespace App\Controller;

use App\Entity\Text;
use App\Form\TextType;
use App\Repository\TextRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

#[Route('/profile')]
class TextController extends AbstractController
{
    #[Route('/text/', name: 'show_texts')]
    public function show(TextRepository $textRepository): Response
    {
        $texts = $textRepository->findAll();
        if (count($texts)==0){
            return $this->redirectToRoute('new_texts');
        }
        return $this->render('text/index.html.twig', [
            'text'=> $texts[0]
        ]);
    }
    #[Route('/text/new', name: 'new_texts')]
    public function new(TextRepository $textRepository,EntityManagerInterface $manager , Request $request): Response
    {
        $texts = $textRepository->findAll();
        if (count($texts)!=0){
            return $this->redirectToRoute('show_texts');
        }
        $texts = new Text();
        $form = $this->createForm(TextType::class,$texts);
        $form->handleRequest($request);
        if($form->isSubmitted() && $form->isValid()){
            $manager->persist($texts);
            $manager->flush();
            return $this->redirectToRoute('show_texts');
        }
        return $this->render('text/add.html.twig', [
            'form'=> $form->createView()
        ]);
    }
    #[Route('/text/edit/{id}', name: 'edit_texts')]
    public function edit(EntityManagerInterface $manager ,Text $text ,Request $request): Response
    {

        $form = $this->createForm(TextType::class,$text);
        $form->handleRequest($request);
        if($form->isSubmitted() && $form->isValid()){
            $manager->persist($text);
            $manager->flush();
            return $this->redirectToRoute('show_texts');
        }
        return $this->render('text/add.html.twig', [
            'form'=> $form->createView(),
            "text"=>$text
        ]);
    }
}
