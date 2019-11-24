<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Blog extends Model
{
    // If you wish to fetch different table name from this model ( other than blogs )
    protected $table = "posts";
}
