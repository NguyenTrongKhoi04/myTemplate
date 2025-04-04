<?php

namespace App\Models\Department;

use Illuminate\Database\Eloquent\Builder;

class DepartmentSearch extends Department
{
    public array $filter = [
        'keyword',
        'name',
        'code',
    ];

    /**
     * Apply filters to a query.
     *
     * @param Builder $query
     * @param array $data
     * @return Builder
     */
    public function buildFilter(Builder $query, array $data): Builder
    {
        if (!empty($data['keyword'])) {
            $query->where(function ($q) use ($data) {
                $q->where('name', 'like', '%' . $data['keyword'] . '%')
                    ->orWhere('code', 'like', '%' . $data['keyword'] . '%');
            });
        }

        if (!empty($data['name'])) {
            $query->where('name', 'like', '%' . $data['name'] . '%');
        }

        if (!empty($data['code'])) {
            $query->where('code', 'like', '%' . $data['code'] . '%');
        }

        return $query;
    }

    public static function buildSearch($query){




        return $query;
    }
}
