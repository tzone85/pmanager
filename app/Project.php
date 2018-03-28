<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    // make fields fillable for laravel prevents mass assignments

    protected $fillable = [
        'name',
        'description',
        'company_id',
        'user_id',
        'days',

    ];

}
