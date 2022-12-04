<?php

namespace App\Controller;

use App\Repository\ProjectRepository;
use Doctrine\ORM\Mapping\Id;
use App\Entity\Category;
use App\Entity\Product;
use Doctrine\Persistence\ManagerRegistry;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

final class ProjectController extends AbstractController 
{
    #[Route(path: "/projects", name: "projects")]
    public function home(Request $request, ProjectRepository $projectRep): Response
    {
        $projects = $projectRep->findAll();
        return $this->render('project/index.html.twig', [
            'projects' => $projects
        ]);
    }

    #[Route(path: "project/edit/{id}", name: "EditProject")]
    public function edit(Request $request, ProjectRepository $projectRep, int $id): Response
    {
        $project = $projectRep->find($id);
        return $this->render('project/edit.html.twig', [
            'project' => $project
        ]);
    }

    #[Route(path: "project/new", name: "NewProject")]
    public function new(Request $request): Response
    {
        return $this->render('project/insert.html.twig');
    }
}
