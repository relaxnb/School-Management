<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MultiUser extends Model
{
    use HasFactory;
    public function get_student(){
    	return $this->belongsTo(AssignStudent::class,'id','student_id');
    }
}
