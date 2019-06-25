<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class MyApp extends Model
{
	// public $table = 'my_apps';
    protected $fillable=['title', 'desc'];
}
