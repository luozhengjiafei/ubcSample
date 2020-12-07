<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class course extends Model
{
    use HasFactory;

    protected $table = 'courses';

    public function setCourse($id,$course_id,$detail){
        $this->attributes['id'] = $id;
        $this->attributes['course_id'] = $course_id;
        $this->attributes['detail'] = $detail;
    }

    public function getCourse($course){
        return $course;
    }
}
