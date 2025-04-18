<?php

namespace App\Models\Department;

use Carbon\Carbon;
use Illuminate\Support\Collection;

class DepartmentFormat extends Department
{
    public static function formatDateFix($data, string $format_date = 'Y-m-d')
    {
        if (!$data) {
            return null;
        }

        $instance = new DepartmentFormat;
        $formatFields = $instance->fieldFormatDate;

        // Nếu là collection, duyệt từng item
        if ($data instanceof Collection) {
            return $data->map(fn($item) => self::formatDate($item));
        }

        // Nếu là object
        if (is_object($data)) {
            foreach ($formatFields as $field) {
                if (isset($data->$field) && self::isValidDate($data->$field)) {
                    $data->$field = Carbon::parse($data->$field)->format($format_date);
                }
            }
            return $data;
        }

        // Nếu là Mảng (thuần và đa chiều)
        if (is_array($data)) {
            foreach ($data as &$item) {
                if (is_array($item) || is_object($item)) {
                    $item = self::formatDate($item, $format_date); // Đệ quy xử lý tiếp nếu là array
                } elseif (self::isValidDate($item)) {
                    $item = Carbon::parse($item)->format($format_date); // Format nếu là ngày hợp lệ
                }
            }
            return $data;
        }

        return $data;
    }


    private static function isValidDate($date): bool
    {
        if (Carbon::parse($date)) {
            return true;
        }
        return false;
    }
}
