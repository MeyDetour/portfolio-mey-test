<?php

namespace App\Controller;

use App\Entity\Project;
use App\Repository\CertificationRepository;
use App\Repository\LastProjectRepository;
use App\Repository\ProjectRepository;
use App\Repository\QualityRepository;
use App\Repository\SocialMediaRepository;
use App\Repository\TechnologyRepository;
use App\Repository\TextRepository;
use App\Service\ImageService;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

class ApiController extends AbstractController
{
    private $projectFilter = 'project';
    private $logoFilter = 'logo';
    private $iconeFilter = 'icone';

    #[Route('/techs', name: 'get_technology')]
    public function getTechnologies(TechnologyRepository $technologyRepository, ImageService $imageService): Response
    {
        $data = [];
        foreach ($technologyRepository->findAll() as $tech) {
            $imageUrl = null;
            $imageName = null;
            if ($tech->getImage()) {
                $imageUrl = $imageService->getImageUrl($tech->getImage(), $this->logoFilter);
                $imageName = $tech->getImage()->getImageName();

            }
            $data[] = [
                "id" => $tech->getId(),
                "name" => $tech->getName(),
                "image" => $imageUrl,
                "imageName" => $imageName
            ];
        }
        return $this->json($data);
    }

    #[Route('/texts', name: 'get_texts')]
    public function getTextes(TextRepository $repository): Response
    {
        $texts = $repository->findAll();
        if (count($texts) == 0) {
            return $this->json(
                [
                    'homePage' => " ",
                    'about' => " "
                ]
            );
        }
        $text = $texts[0];
        return $this->json(
            [
                'homePage' => $text->getHomePageDescription(),
                'about' => $text->getAboutDescription()
            ]
        );
    }

    #[Route('/certifs', name: 'get_certificatinons')]
    public function getCertifications(CertificationRepository $repository): Response
    {
        $data = [];
        foreach ($repository->findAll() as $datum) {
            $data[] = [
                "id" => $datum->getId(),
                "name" => $datum->getTitle(),
                "description" => $datum->getDescription(),
                "point1" => $datum->getPoint1(),
                "point2" => $datum->getPoint2(),
                "point3" => $datum->getPoint3(),
            ];
        }
        return $this->json($data);
    }

    #[Route('/lastProject', name: 'get_last_project')]
    public function getLastProject(LastProjectRepository $repository): Response
    {
        $lasts = $repository->findAll();
        if (count($lasts) == 0) {
            return $this->json(
                [
                    'name' => " ",
                    'description' => " ",
                    'objectifs' => " ",
                    'technology' => " ",
                ]
            );
        }
        $last = $lasts[0];
        return $this->json(
            [
                'name' => $last->getName(),
                'description' => $last->getDescription(),
                'objectifs' => $last->getObjectifs(),
                'technology' => $last->getTechnology(),
            ]
        );
    }

    #[Route('/projects', name: 'get_projects')]
    public function getProjects(ProjectRepository $repository, ImageService $imageService): Response
    {
        $data = [];
        foreach ($repository->findAll() as $datum) {
            $imageUrl = null;
            $imageName = null;
            if ($datum->getImage()) {
                $imageUrl = $imageService->getImageUrl($datum->getImage(), $this->projectFilter);
                $imageName = $datum->getImage()->getImageName();
            }

            $data[] = [
                "id" => $datum->getId(),
                "imageName" => $imageName,
                "image" => $imageUrl,
            ];
        }
        return $this->json($data);
    }

    #[Route('/project/{id}', name: 'get_project')]
    public function getProject(Project $datum, ImageService $imageService): Response
    {
        $imageUrl = null;
        $imageName = null;
        if ($datum->getImage()) {
            $imageUrl = $imageService->getImageUrl($datum->getImage(), $this->projectFilter);
            $imageName = $datum->getImage()->getImageName();
        }


        return $this->json(
            [
                "id" => $datum->getId(),
                "name" => $datum->getName(),
                "imageName" => $datum->$imageName(),
                "description" => $datum->getDescription(),
                "link" => $datum->getLink(),
                "image" => $imageUrl,
                "step1" => $datum->getStep1(),
                "step2" => $datum->getStep2(),
                "step3" => $datum->getStep3(),
            ]
        );
    }

    #[Route('/qualities', name: 'get_qualities')]
    public function getQualities(QualityRepository $repository): Response
    {
        $data = [];
        foreach ($repository->findAll() as $datum) {
            $data[] = [
                "id" => $datum->getId(),
                "name" => $datum->getName(),
                "description" => $datum->getDescription()
            ];
        }
        return $this->json($data);
    }

    #[Route('/medias', name: 'get_medias')]
    public function getMedias(SocialMediaRepository $repository, ImageService $imageService): Response
    {
        $data = [];

        foreach ($repository->findAll() as $datum) {
            $imageUrl = null;
            $imageName = null;
            if ($datum->getImage()) {
                $imageUrl = $imageService->getImageUrl($datum->getImage(), $this->iconeFilter);
                $imageName = $datum->getImage()->getImageName();
            }
            $data[] = [
                "id" => $datum->getId(),
                "link" => $datum->getLink(),
                "image" => $imageUrl,
                "imageName" => $imageName,
            ];
        }
        return $this->json($data);
    }


}
