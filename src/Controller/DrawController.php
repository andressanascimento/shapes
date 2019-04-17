<?php

namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

use App\Services\DrawService;

class DrawController extends AbstractController {

     /**
     * @Route("/api/draw")
     */
    public function draw(DrawService $service, Request $request)
    {
        if (!$request->isMethod('post')) {
            $response = new Response();
            $response->setContent('405 - Method not allowed');
            $response->setStatusCode(Response::HTTP_METHOD_NOT_ALLOWED);
            return $response;
        }

        $body = json_decode($request->getContent(), true);
        $html = $service->draw($body);

        return $this->render('draw/draw.html.twig', ['html' => $html]);
    }
}