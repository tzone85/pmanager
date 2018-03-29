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

    public function companies(){
        return $this->belongsTo('App\Model\Company');
    }

    public function users(){
        return $this->belongsTo('App\Model\User');
    }

}
