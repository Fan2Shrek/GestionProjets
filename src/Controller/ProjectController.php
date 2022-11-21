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

    #[Route(path: "/projects", name: "Project")]
    public function project(Request $request): Response
    {
        return $this->render('project/projects.html.twig');
    }
}