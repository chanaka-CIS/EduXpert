<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Classroom extends Model
{
    protected $table = 'classes';
    protected $fillable = [
        'name', 'teacher_id'
    ];

    protected $guarded = ['id'];
}
