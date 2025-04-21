<?php

namespace App\Models;

use Dotenv\Repository\Adapter\GuardedWriter;
use Illuminate\Contracts\Auth\Guard;
use Illuminate\Database\Eloquent\Model;

class Course extends Model
{
 protected $guarded =[];


 public function category()
 {
    return $this->belongsTo(category::class);
 }

}
