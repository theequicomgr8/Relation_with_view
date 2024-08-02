<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Contact;
class Student extends Model
{
    use HasFactory;

    public function contact(){
        return $this->hasOne(Contact::class,'student_id','id');
    }
}
