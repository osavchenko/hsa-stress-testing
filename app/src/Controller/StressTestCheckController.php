<?php

namespace App\Controller;

use App\Entity\StressTestCheck;
use App\Repository\StressTestCheckRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

final class StressTestCheckController extends AbstractController
{
    #[Route('/submit')]
    public function store(Request $request, StressTestCheckRepository $stressTestCheckRepository): JsonResponse
    {
        $requestData = (string)$request->getContent();
        $json = json_decode($requestData, true, 512, JSON_THROW_ON_ERROR);
        $stressTestCheckRepository->save(new StressTestCheck(
            $json['string_1'],
            $json['string_2'],
            (int)$json['int'],
            (float)$json['float'],
        ));

        return new JsonResponse([], Response::HTTP_CREATED);
    }
}
