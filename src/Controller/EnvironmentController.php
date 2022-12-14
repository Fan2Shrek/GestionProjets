<?php

namespace App\Controller;

use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

final class EnvironmentController extends AbstractController 
{

    #[Route(path: "/environment/edit", name: "EditEnvironment")]
    public function project(Request $request): Response
    {
        return $this->render('environment/edit.html.twig');
    }

    #[Route(path: "/environment/insert", name: "NewEnvironment")]
    public function edit(Request $request): Response
    {
        return $this->render('environment/insert.html.twig');
    }
}