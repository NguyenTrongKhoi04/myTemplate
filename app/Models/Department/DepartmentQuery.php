<?php

namespace App\Models\Department;

use Illuminate\Database\Eloquent\Builder;

class DepartmentQuery extends Department
{
    public static function base($field = 'dept_no', $type = 'desc'): Builder
    {
        return Department::query()->orderBy($field, $type);
    }
}
