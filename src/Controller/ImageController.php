<?php

namespace App\Controller;

use App\Entity\Image;
use App\Entity\Project;
use App\Entity\SocialMedia;
use App\Entity\Technology;
use App\Form\ImageType;
use App\Service\ImageService;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

#[Route('/profile')]
class ImageController extends AbstractController
{



    #[Route('/image/{id}/technology', name: 'technology_add_image')]
    public function addImageToTechnology(EntityManagerInterface $manager ,Technology $technology, Request $request): Response
    {
        $image = new Image();
        $form = $this->createForm(ImageType::class, $image);
        $form->handleRequest($request);
        if ($form->isSubmitted() && $form->isValid()) {
            $image->setTechnology($technology);
            $manager->persist($image);
            $manager->flush();
            return $this->redirectToRoute('add_technology');
        }
        return $this->render('image/index.html.twig', [
            'form' => $form->createView(),
        ]);
    } #[Route('/image/{id}/project', name: 'project_add_image')]
    public function addImageToProject(EntityManagerInterface $manager ,Project $project, Request $request): Response
    {
        $image = new Image();
        $form = $this->createForm(ImageType::class, $image);
        $form->handleRequest($request);
        if ($form->isSubmitted() && $form->isValid()) {
            $image->setProjectt($project);
            $manager->persist($image);
            $manager->flush();
            return $this->redirectToRoute('projets');
        }
        return $this->render('image/index.html.twig', [
            'form' => $form->createView(),
        ]);
    } #[Route('/image/{id}/media', name: 'media_add_image')]
    public function addImageToMedia(EntityManagerInterface $manager ,SocialMedia $media, Request $request): Response
    {
        $image = new Image();
        $form = $this->createForm(ImageType::class, $image);
        $form->handleRequest($request);
        if ($form->isSubmitted() && $form->isValid()) {
            $image->setSocialMedia($media);
            $manager->persist($image);
            $manager->flush();
            return $this->redirectToRoute('new_media');
        }
        return $this->render('image/index.html.twig', [
            'form' => $form->createView(),
        ]);
    }
}
