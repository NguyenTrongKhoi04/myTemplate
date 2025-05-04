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

    public static function getOneDepartment(int $dept_no): Department
    {
        return Department::where('dept_no', $dept_no)->firstOrFail();
    }

    public static function updateOneDepartment(int $dept_no, Department $department): Department
    {

    }
}
