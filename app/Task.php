<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Task extends Model
{
    //
    protected $fillable = [
        'name',
        'project_id',
        'user_id',
        'days',
        'hours',
        'company_id',

    ];

    public function users(){
        return $this->belongsTo('App\Model\User');
    }

    public function projects(){
        return $this->belongsTo('App\Model\Project');
    }

    public function companies(){
        return $this->belongsTo('App\Model\Company');
    }
}
