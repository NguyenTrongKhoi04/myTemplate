<?php

namespace App\Models\Department;

use Illuminate\Contracts\Pagination\LengthAwarePaginator;

class DepartmentActions
{
    public static function getDataForIndex(array $dataForQuery): LengthAwarePaginator
    {
        $query = DepartmentQuery::base();
        $query = DepartmentSearch::buildFilter($query, $dataForQuery);

        return $query->paginate(20);
    }
}
