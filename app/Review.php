<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Review extends Model
{
    public $timestamps = false;

    protected $fillable = [
         'title', 'textReview', 'user_id',
    ];

    public function user(){
        return $this->belongsTo('App\User');
    }
}
