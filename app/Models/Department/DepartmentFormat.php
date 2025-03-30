<?php

namespace App\Models\Department;

use Carbon\Carbon;
use Illuminate\Support\Collection;

class DepartmentFormat extends Department
{
    public array $fieldFormatDate = [];

    public function __construct(array $attributes = [])
    {
        parent::__construct($attributes);
        $this->fieldFormatDate = [
            'created_at',
            'updated_at',
        ];
    }

    public static function formatDate($obj)
    {
        if (!$obj) {
            return null;
        }

        $instance = new DepartmentFormat;
        $formatFields = $instance->fieldFormatDate;

        // Nếu $obj là một collection thì duyệt qua từng item
        if ($obj instanceof Collection) {
            return $obj->map(fn($item) => self::formatDateObj($item));
        }

        // Nếu là object đơn thì format
        foreach ($formatFields as $field) {
            if (isset($obj->$field)) {
                $obj->$field = Carbon::parse($obj->$field)->format('Y-m-d H:i:s');
            }
        }

        if(is_array()){

        }
        return $obj;
    }
}
