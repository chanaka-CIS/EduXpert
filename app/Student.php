<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    protected $table = 'students';
    protected $fillable = [
        'name', 'address', 'user_id', 'sub_id', 'class_id'
    ];

    protected $guarded = ['id'];
}
