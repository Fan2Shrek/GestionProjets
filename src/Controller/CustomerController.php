<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

final class CustomerController extends AbstractController
{

    #[Route(path: "/customers", name: "customers")]
    public function home(Request $request): Response
    {
        return $this->render('customer/index.html.twig');
    }
    
    #[Route(path: "customer/edit/{id}", name: "EditCustomer")]
    public function edit(Request $request): Response
    {
        return $this->render('customer/edit.html.twig');
    }

    #[Route(path: "customer/new", name: "NewCustomer")]
    public function new(Request $request): Response
    {
        return $this->render('customer/insert.html.twig');
    }
}