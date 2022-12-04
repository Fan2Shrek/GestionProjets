<?php

namespace App\Controller;

use App\Repository\HostRepository;
use Doctrine\ORM\Mapping\Id;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

final class HostController extends AbstractController
{
    #[Route(path: "/hosts", name: "hosts")]
    public function home(Request $request, HostRepository $hostRep): Response
    {
        $hosts = $hostRep->findAll();
        return $this->render('host/index.html.twig', [
            'hosts' => $hosts
        ]);
    }

    #[Route(path: "host/edit/{id}", name: "EditHost")]
    public function edit(Request $request, HostRepository $hostRep, int $id): Response
    {
        $host = $hostRep->find($id);
        return $this->render('host/edit.html.twig', [
            'host' => $host
        ]);
    }

    #[Route(path: "host/new", name: "NewHost")]
    public function new(Request $request): Response
    {
        return $this->render('host/insert.html.twig');
    }
}