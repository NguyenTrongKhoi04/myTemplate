<?php

namespace App\Models\Department;

use Illuminate\Contracts\Pagination\LengthAwarePaginator;

class DepartmentActions
{
    public static function getDataForIndex(array $dataForQuery): LengthAwarePaginator
    {
        $query = DepartmentQuery::query();
        $query = DepartmentSearch::buildFilter($query, $dataForQuery);
        $query = DepartmentSearch::buildSort($query, $dataForQuery);

        return $query->paginate($dataForQuery['paginate'] ?? 2)->appends(request()->query());
    }
}
