<?php

namespace App\Traits;

use App\Models\User;

/**
 * This in handle images,media or files linking
 */
trait ImagesHelper
{
    /**
     * @param User $user
     * @return string
     */
    /**
     * Return full path of user profile image
     *
     * @param User|null $user
     * @return string
     */
    protected function getProfileImage($user): string
    {
        $url = config('app.url');
        if (!$user)
            return  "";
        return strpos($user->avatar, 'http') === 0 ?
            $user->avatar
            : ($user->avatar === null ? $url . '/' . config('_custom.user_default_image') : "$url/storage/{$user->avatar}");
    }

    /**
     * Return the full URL of an image stored in the application.
     *
     * @param string|null $url The relative URL of the image.
     * @return string The full URL of the image, or an empty string if the URL is null.
     */
    protected function getFullImageUrl($url)
    {
        if ($url)
            return config('app.url') . "/storage/{$url}";
        return "";
    }
}