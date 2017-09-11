<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class cp extends Model
{
    protected $table = 'cp';
    protected $fillable = ['nama','hp','email'];
}
