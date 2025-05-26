<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class EnrollDetail extends Model
{
    protected $guarded=[];

    public function enroll(){
        return $this->hasMany(Enroll::class,'enrolledcourse_id');
    }
}
