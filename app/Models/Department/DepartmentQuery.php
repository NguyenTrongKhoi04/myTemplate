<?php

namespace App\Models\Department;

class DepartmentQuery extends Department
{
    public static function getDepartmentById($id){
        return Department::find($id);
    }

    public static function getAllDepartment()
    {
        $dataAll = Department::all();
        $formateDate = DepartmentFormat::formatDateObj($dataAll);
        $formatPrice = DepartmentFormat::formatPriceObj($formateDate);
        return $formatPrice
    }
}
