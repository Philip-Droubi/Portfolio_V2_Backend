<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class TagResource extends JsonResource
{
    public function toArray(Request $request): array
    {
        $data = [
            'id'        => $this->id,
        ];

        foreach (config("_custom.accepted_languages") as $lang)
            $data += [
                "name_$lang"        => $this->getTranslation('name', $lang, false),
            ];

        return $data;
    }
}
