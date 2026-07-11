<?php

namespace App\Http\Resources;

use App\Traits\ImagesHelper;
use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class CertificateResource extends JsonResource
{
    use ImagesHelper;
    public function toArray(Request $request): array
    {
        $data = [
            'id'                => $this->id,
            'file_url'          => $this->getFullImageUrl($this->file_url),
            'issue_date'        => $this->issue_date,
        ];

        foreach (config("_custom.accepted_languages") as $lang)
            $data += [
                "title_$lang"               => $this->getTranslation('title', $lang, false),
                "description_$lang"         => $this->getTranslation('description', $lang, false),
            ];

        return $data;
    }
}
