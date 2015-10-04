<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Produto extends Model
{
     protected $table = 'produto';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['name', 'description', 'category','cat_id','photo','thunb','prince'];
}
