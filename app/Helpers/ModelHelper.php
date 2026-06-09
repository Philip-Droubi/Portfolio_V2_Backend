<?php

use App\Constants\ExceptionMessages;
use App\Constants\Resources;

/**
 * Beuty the not found message of the model
 */

if (!function_exists('findByIdOrFail')) {
    /**
     * Find a model instance by ID and return it or throw a not found exception
     *
     * @param string $model
     * @param int $modelId
     * @param string $resource
     * @param string $type
     * @param array $where
     * @param array $with
     * @param bool $withTrashed
     * @param array|null $selectedColumns
     * @param bool $asQuery
     *
     * @throws \Illuminate\Validation\ValidationException
     *
     * @return \Illuminate\Database\Eloquent\Model|\Illuminate\Database\Eloquent\Builder
     */
    function findByIdOrFail($model, $modelId, $resource = Resources::ITEM, $type = 'male', $where = [], $with = [], $withTrashed = false, $selectedColumns = null, $asQuery = false)
    {
        $modelInstance = null;
        $query = $withTrashed ? $model::withTrashed() : $model::query();

        if (isset($selectedColumns)) {
            $query->select($selectedColumns);
        }

        if (!empty($where)) {
            $query->where($where);
        }

        if (!empty($with)) {
            $query->with($with);
        }

        if (!empty($queries)) {
            $query->$queries;
        }

        $modelInstance = $query->find($modelId);

        if (!$modelInstance) {
            $notFoundMessage = '';
            if ($type == 'female') {
                $notFoundMessage = ExceptionMessages::MSG_RESOURCE_NOT_FOUNDF;
            } else {
                $notFoundMessage = ExceptionMessages::MSG_RESOURCE_NOT_FOUND;
            }
            notFoundFailure(null, __($notFoundMessage, ['resource' => __($resource)]));
        }
        if ($asQuery)
            return $query->where('id', $modelId);
        return $modelInstance;
    }
}