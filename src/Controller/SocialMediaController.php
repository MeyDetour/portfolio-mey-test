<?php

namespace App\Controller;

use App\Entity\Certification;
use App\Entity\SocialMedia;
use App\Form\MediaType;
use App\Repository\SocialMediaRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

#[Route('/profile')]
class SocialMediaController extends AbstractController
{

    #[Route('/media/new', name: 'new_media')]
    public function new(SocialMediaRepository $repository,EntityManagerInterface $manager , Request $request): Response
    {
        $medias = $repository->findAll();

        $media = new SocialMedia();
        $form = $this->createForm(MediaType::class,$media);
        $form->handleRequest($request);
        if($form->isSubmitted() && $form->isValid()){
            $manager->persist($media);
            $manager->flush();
            return $this->redirectToRoute('media_add_image',['id'=>$media->getId()]);
        }
        return $this->render('media/index.html.twig', [
            'form'=> $form->createView(),

            "medias"=>$repository->findAll()
        ]);
    }
    #[Route('/media/edit/{id}', name: 'edit_media')]
    public function edit(EntityManagerInterface $manager, SocialMediaRepository $repository ,SocialMedia $socialMedia ,Request $request): Response
    {
        $form = $this->createForm(MediaType::class,$socialMedia);
        $form->handleRequest($request);
        if($form->isSubmitted() && $form->isValid()){
            $manager->persist($socialMedia);
            $manager->flush();
            return $this->redirectToRoute('new_media');
        }
        return $this->render('media/index.html.twig', [
            'form'=> $form->createView(),
            "media"=>$socialMedia,
            "medias"=>$repository->findAll()
        ]);
    }
    #[Route('/media/remove/{id}', name: 'remove_media')]
    public function remove(EntityManagerInterface $manager ,SocialMedia $media): Response
    {

        $manager->remove($media);
        $manager->flush();
        return  $this->redirectToRoute('new_media');
    }
}
//  <a href="{{ path('remove_quality',{'id':quality.id}) }}">Supprimer</a>
//