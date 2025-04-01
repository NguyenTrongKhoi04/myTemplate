<?php

namespace App\Models\Department;

use Illuminate\Contracts\Pagination\LengthAwarePaginator;
use Illuminate\Support\Collection;

class DepartmentQuery extends Department
{
    public static function getDepartmentById($id){
        return Department::find($id);
    }

    public static function getAllDepartmentPagination(int $paginate = 20): LengthAwarePaginator
    {
        return Department::query()->paginate($paginate);
    }
}
