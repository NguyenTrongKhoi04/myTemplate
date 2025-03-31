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
//    protected $fillable = [];
//    protected $casts = [
//        'created_at' => 'string',
//        'updated_at' => 'string',
//    ];
    protected static function newFactory(): DepartmentFactory|Factory
    {
        return DepartmentFactory::new();
    }
}
