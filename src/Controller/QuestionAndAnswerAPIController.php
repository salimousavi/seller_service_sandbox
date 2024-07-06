<?php

namespace App\Controller;

use App\Lib\Controller\AForm;
use App\Lib\Controller\AListView;
use App\Lib\Controller\AObjectView;
use App\Lib\Resolver\APIRequest;
use App\Mock\QuestionAndAnswer\QuestionAndAnswerMockData;
use App\Mock\QuestionAndAnswer\SaveAnswerMockData;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\Routing\Attribute\Route;

class QuestionAndAnswerAPIController extends AbstractAPIController
{
    #[Route(path: '/api/v3/questions', name: "QuestionAndAnswerListView", methods: ["GET"])]
    public function QuestionAndAnswerListView(APIRequest $APIRequest): JsonResponse
    {
        return $this->createJsonResponse((new AListView($APIRequest, QuestionAndAnswerMockData::class))->execute());
    }

    #[Route(path: '/api/v3/questions/{question_id}', name: "SellerProductQuestionObjectView", methods: ["GET"])]
    public function SellerProductQuestionObjectView(APIRequest $APIRequest): JsonResponse
    {
        return $this->createJsonResponse((new AObjectView($APIRequest, QuestionAndAnswerMockData::class))->execute());
    }

    #[Route(path: '/api/v3/questions/answer', name: "SaveAnswerForm", methods: ["POST"])]
    public function SaveAnswerForm(APIRequest $APIRequest): JsonResponse
    {
        return $this->createJsonResponse((new AForm($APIRequest, SaveAnswerMockData::class))->execute());
    }

}