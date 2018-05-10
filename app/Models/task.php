<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class task extends Model
{
    public $timestamps = false;
    protected $table = 'tasks';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'id', 'name','project_id'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'created_at','updated_at'
    ];
}
