<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\Course;

class Instructor extends Model
{
    protected $guarded =[];

    public function course(){
        return $this->hasMany(course::class);
    }

  
}
