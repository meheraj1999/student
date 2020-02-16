<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class student extends Model
{
    protected $table = 'student';
    protected $fillable=['name','roll','depertment','institutte','contact'];
}
