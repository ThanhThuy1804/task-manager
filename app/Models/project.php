<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class project extends Model
{
    //use Notifiable;

    public $timestamps = false;
    protected $table = 'projects';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'id', 'name','created_at','updated_at'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
    ];
}
