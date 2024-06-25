<?php

namespace App\Controller;

use App\Entity\Technology;
use App\Form\TechnologyType;
use App\Repository\TechnologyRepository;
use App\Service\ImageService;
use Doctrine\ORM\EntityManager;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

#[Route('/profile')]
class TechnologyController extends AbstractController
{
    #[Route('/tech', name: 'add_technology')]
    public function index(EntityManagerInterface $manager, Request $request, TechnologyRepository $technologyRepository): Response
    {
        $technology = new Technology();
        $form = $this->createForm(TechnologyType::class, $technology);
        $form->handleRequest($request);
        if ($form->isSubmitted() && $form->isValid()) {
            $manager->persist($technology);
            $manager->flush();
            return $this->redirectToRoute('technology_add_image', ['id' => $technology->getId()]);
        }
        return $this->render('technology/index.html.twig', [
            'form' => $form->createView(),
            'techs' => $technologyRepository->findAll()
        ]);
    }
    #[Route('/tech/edit/{id}', name: 'edit_technology')]
    public function edit(EntityManagerInterface $manager, Request $request, Technology $technology, TechnologyRepository $technologyRepository): Response
    {
        $form = $this->createForm(TechnologyType::class, $technology);
        $form->handleRequest($request);
        if ($form->isSubmitted() && $form->isValid()) {
            $manager->persist($technology);
            $manager->flush();
            return $this->redirectToRoute('add_technology');
        }
        return $this->render('technology/index.html.twig', [
            'form' => $form->createView(),
            'techs' => $technologyRepository->findAll()
        ]);
    }
    #[Route('/tech/remove/{id}', name: 'remove_technology')]
    public function remove_tech(EntityManagerInterface $manager, Technology $technology): Response
    {
        $manager->remove($technology);
        $manager->flush();
        return $this->redirectToRoute('add_technology');
    }



}