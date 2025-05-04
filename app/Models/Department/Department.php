<?php

namespace App\Models\Department;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Factories\Factory;
use Database\Factories\DepartmentFactory;
use Illuminate\Database\Eloquent\Model;

class Department extends Model
{
    use HasFactory;

    protected  $table = 'departments';
    protected $fillable = [
        'dept_no',
        'dept_name',
        'created_at',
        'updated_at',
    ];

    public $timestamps = false;

    protected static function newFactory(): DepartmentFactory|Factory
    {
        return DepartmentFactory::new();
    }
}
