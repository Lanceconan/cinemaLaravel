<?php

namespace Cinema;

use Illuminate\Database\Eloquent\Model;

class Genre extends Model
{
    protected $table = "genres";
    //protected $primaryKey = "idAlgo";

    //public $timestamps = false;

     /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'genre'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
       
    ];


}
