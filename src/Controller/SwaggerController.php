<?php

namespace App\Controller;

use App\Lib\Controller\AForm;
use App\Lib\Controller\AListView;
use App\Lib\Resolver\APIRequest;
use App\Mock\Auth\ClientCreateTokenMockData;
use App\Mock\Auth\ClientRefreshTokenMockData;
use App\Mock\Auth\ScopeMockData;
use App\Mock\Swagger\SwaggerMockData;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\HeaderUtils;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;
use Symfony\Component\Yaml\Yaml;

class SwaggerController extends AbstractController
{
    #[Route(path: '/api/v3/doc', name: "swaggerView", methods: ["GET"])]
    public function apiDocAction(Request $request): Response
    {
        return $this->render('swagger/swagger.html.twig', [
            'url' => '/api/v3/doc/spec',
        ]);
    }

    #[Route(path: '/api/v3/doc/spec', name: "swaggerSpec", methods: ["GET"])]
    public function apiDocSpecAction(Request $APIRequest): Response
    {
        $response = new Response(SwaggerMockData::build());

        $disposition = HeaderUtils::makeDisposition(
            HeaderUtils::DISPOSITION_ATTACHMENT,
            'spec.yml'
        );

        $response->headers->set('Content-Disposition', $disposition);

        return $response;
    }
}