<?php

namespace App\Models\Department;

use Illuminate\Database\Eloquent\Builder;

class DepartmentSearch extends Department
{
    /**
     * Apply filters to a query.
     *
     * @param Builder $query
     * @param array $dataForQuery
     * @return Builder
     */
    public static function buildFilter(Builder $query, array $dataForQuery): Builder
    {
        if (!empty($dataForQuery['keyword'])) {
            $keyword = '%' . $dataForQuery['keyword'] . '%';
            $query->where('dept_no', 'like', $keyword)
                ->orWhere('dept_name', 'like', $keyword);
        }

        return $query;
    }

    public static function buildSort(Builder $query, array $dataForQuery): Builder
    {
        $field_sort = $dataForQuery['field_sort'] ?? 'dept_no';
        $type_sort = $dataForQuery['type_sort'] ?? 'desc';
        $query->orderBy($field_sort, $type_sort);

        return $query;
    }
}
