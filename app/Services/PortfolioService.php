<?php

namespace App\Services;

use App\Http\Resources\ProjectResource;
use App\Http\Resources\TechResource;
use App\Models\Project\Project;
use App\Models\Project\Tech;

/**
 * Class PortfolioService.
 */
class PortfolioService
{
    public function portfolio(): array
    {
        return [
            'projects'  => ProjectResource::collection(Project::where('is_draft', false)
                ->with(['teches', 'tags', 'media'])
                ->get()),
            'teches'    => TechResource::collection(Tech::where('is_active', true)->get(['id', 'name', 'icon'])),
        ];
    }
}
