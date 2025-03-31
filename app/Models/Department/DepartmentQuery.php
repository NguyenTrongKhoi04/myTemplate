<?php

namespace App\Models\Department;

class DepartmentQuery extends Department
{
    public static function getDepartmentById($id){
        return Department::find($id);
    }

    public static function getAllDepartment()
    {
        $data = Department::all();
//        dd(DepartmentFormat::formatDate($data, 'Y'));
        return DepartmentFormat::formatDate($data, 'Y');
    }
}
