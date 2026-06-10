<?php

namespace App\Http\Resources;

use App\Traits\ImagesHelper;
use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class TechResource extends JsonResource
{
    use ImagesHelper;
    public function toArray(Request $request): array
    {
        $data = [
            'id'        => $this->id,
            'icon'      => $this->getFullImageUrl($this->icon),
        ];

        foreach (config("_custom.accepted_languages") as $lang)
            $data += [
                "name_$lang"        => $this->getTranslation('name', $lang, false),
            ];

        return $data;
    }
}
