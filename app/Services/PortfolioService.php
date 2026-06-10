<?php

namespace App\Services;

use App\Http\Resources\TechResource;
use App\Models\Project\Tech;

/**
 * Class PortfolioService.
 */
class PortfolioService
{
    public function portfolio(): array
    {
        return [
            'projects' => [],
            'teches' => TechResource::collection(Tech::all(['id', 'name', 'icon'])),
        ];
    }
}
