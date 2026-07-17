<?php

namespace App\Services;

use App\Http\Resources\CertificateResource;
use App\Http\Resources\ProjectResource;
use App\Http\Resources\TagResource;
use App\Http\Resources\TechResource;
use App\Models\Certificate;
use App\Models\Project\Project;
use App\Models\Project\Tag;
use App\Models\Project\Tech;

/**
 * Class PortfolioService.
 */
class PortfolioService
{
    public function portfolio(): array
    {
        return [
            'projects'      => ProjectResource::collection(
                Project::where('is_draft', false)
                    ->with([
                        'techs' => fn($q) => $q->orderBy('project_tech.id'),
                        'tags',
                        'media'
                    ])
                    ->orderBy('start_date', 'desc')
                    ->get()
            ),
            'techs'         => TechResource::collection(Tech::where('is_active', true)->get(['id', 'name', 'icon'])),
            'tags'          => TagResource::collection(Tag::all()),
            'certificate'   => CertificateResource::collection(Certificate::all()),
        ];
    }
}
