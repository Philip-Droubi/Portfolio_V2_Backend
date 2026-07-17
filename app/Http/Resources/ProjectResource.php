<?php

namespace App\Http\Resources;

use App\Traits\ImagesHelper;
use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class ProjectResource extends JsonResource
{
    use ImagesHelper;
    public function toArray(Request $request): array
    {
        $data = [
            'id'            => $this->id,

            'main_image'    => $this->getFullImageUrl($this->main_image),
            'slug'          => $this->slug,
            'start_date'    => $this->start_date,
            'end_date'      => $this->end_date,
            'url'           => $this->url,
            'live_url'      => $this->live_url,
            'is_company'    => (bool) $this->is_company,

            'techs'         => TechResource::collection($this->techs),
            'tags'          => TagResource::collection($this->tags),
            'media'         => $this->getMedia(),
        ];

        foreach (config("_custom.accepted_languages") as $lang)
            $data += [
                "name_$lang"                => $this->getTranslation('name', $lang, false),
                "description_$lang"         => $this->getTranslation('description', $lang, false),
                "tiny_description_$lang"    => $this->getTranslation('tiny_description', $lang, false),
            ];

        return $data;
    }

    public function getMedia(): array
    {
        $data = [];

        foreach ($this->media as $med) {
            $data[] = [
                'id'        => $med->id,
                'media_url' => $this->getFullImageUrl($med->url),
            ];
        }

        return $data;
    }
}
