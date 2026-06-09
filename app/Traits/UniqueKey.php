<?php

namespace App\Traits;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

trait UniqueKey
{
    /**
     * Generate a unique string key for a model.
     * The key is generated until it is not found in the database.
     * The length of the key can be specified.
     * A prefix can be specified to start the key.
     *
     * @param Model $model
     * @param string $columnName
     * @param string|null $pre
     * @param int $length
     * @return string
     */
    protected function generateUniqeStringKey($model, string $columnName, ?string $pre = null, int $length = 32): string
    {
        do {
            $randKey = Str::random($length);
            $uniqueKey = $pre ? "$pre$randKey" : $randKey;
        } while ($model::where($columnName, $uniqueKey)->first());
        return $uniqueKey;
    }

    /**
     * Generate a unique numeric key for a model.
     * The key is generated until it is not found in the database.
     * The minimum and maximum values can be specified.
     * A prefix can be specified to start the key.
     *
     * @param Model|string $model
     * @param string $columnName
     * @param string|null $pre
     * @param int $min
     * @param int $max
     * @return string
     */
    protected function generateUniqeNumericKey($model, string $columnName, ?string $pre = null, int $min = 110000, int $max = 990000): string
    {
        do {
            $randKey = random_int($min, $max);
            $uniqueKey = $pre ? "$pre$randKey" : $randKey;
        } while ($model::where($columnName, $uniqueKey)->first());
        return $uniqueKey;
    }
}
