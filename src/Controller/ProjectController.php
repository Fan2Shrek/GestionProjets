<?php

namespace App\Controller;

use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

final class ProjectController extends AbstractController 
{

    #[Route(path: "/projects", name: "projects")]
    public function project(Request $request): Response
    {
        return $this->render('project/projects.html.twig');
    }

    #[Route(path: "/project/update/{id}", name: "EditProject")]
    public function edit(Request $request): Response
    {
        return $this->render('project/edit.html.twig');
    }

    #[Route(path: "/project/new", name: "NewProject")]
    public function new(Request $request): Response
    {
        return $this->render('project/insert.html.twig');
    }
}
