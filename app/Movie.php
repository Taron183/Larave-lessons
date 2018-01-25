<?php

namespace App;

use Illuminate\Database\Eloquent\Model;


class Movie extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'movies';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['movie_name', 'movie_time'];

    public function user(){
        return $this->belongsTo('App\User');
    }

}
