<?php

namespace App\Models\Department;

class DepartmentDTO
{
    public ?int $id;
    public ?string $name;
    public ?string $description;

    public function __construct(?int $id, ?string $name, ?string $description = null)
    {
        $this->id = $id;
        $this->name = $name;
        $this->description = $description;
    }

    public static function fromModel(Department $department, array $fields = ['id', 'name', 'description'])
    {
        $data = [];

        foreach ($fields as $field) {
            $data[$field] = $department->$field ?? null;
        }

        return new self(
            $data['id'] ?? null,
            $data['name'] ?? null,
            $data['description'] ?? null
        );
    }
}

