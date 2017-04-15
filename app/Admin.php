<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Admin extends Model
{
    protected $table = 'dynamic_words';
    protected $fillable = ['gender', 'options', 'user_id', 'another_one'];
}
