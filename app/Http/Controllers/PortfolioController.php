<?php

namespace App\Http\Controllers;

use App\Constants\ApiMessages;
use App\Http\Controllers\Controller;
use App\Services\PortfolioService;
use Illuminate\Http\JsonResponse;

class PortfolioController extends Controller
{
    public function __construct(
        protected PortfolioService $service
    ) {}

    public function portfolio(): JsonResponse
    {
        return success(
            $this->service->portfolio(),
            ApiMessages::MSG_SUCCESS,
        );
    }
}
