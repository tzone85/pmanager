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

    public function company(){
        return $this->belongsTo('App\Company');
    }

    public function user(){
        return $this->belongsToMany('App\User');
    }

}
