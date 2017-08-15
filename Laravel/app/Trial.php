<?php

namespace App;

use Illuminate\Database\Eloquent\Model;


class Trial extends Model
{
    protected $table = 'trials';

    protected $fillable = ['name', 'class', 'added_by'];
}