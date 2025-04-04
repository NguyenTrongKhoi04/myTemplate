<?php

namespace App\Models\Department;

use Illuminate\Contracts\Pagination\LengthAwarePaginator;
use Illuminate\Support\Collection;

class DepartmentQuery extends Department
{
    public static function getData(array $dataForQuery): LengthAwarePaginator
    {
        $paginate = $dataForQuery['paginate'] ?? 20;
        $query = Department::query();
        DepartmentSearch::buildFilter($query);
        return Department::query()->paginate($paginate);
    }


}
