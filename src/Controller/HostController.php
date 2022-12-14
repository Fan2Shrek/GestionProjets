<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

final class HostController extends AbstractController
{

    #[Route(path: "/hosts", name: "hosts")]
    public function home(Request $request): Response
    {
        return $this->render('host/index.html.twig');
    }

    #[Route(path: "host/edit/{id}", name: "EditHost")]
    public function edit(Request $request): Response
    {
        return $this->render('host/edit.html.twig');
    }

    #[Route(path: "host/new", name: "NewHost")]
    public function new(Request $request): Response
    {
        return $this->render('host/insert.html.twig');
    }
}