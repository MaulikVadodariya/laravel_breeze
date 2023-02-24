<?php

namespace App\DataTables;

use App\Models\Teacher;

class TeacherDatatable 
{
    public function get()
    {
        $query = Teacher::query()->select('teachers.*');
        
        return $query;
    }
}
