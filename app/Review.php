<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Review extends Model
{
    public $timestamps = false;

    protected $fillable = [
        'textReview', 'title', 'user_id',
    ];

    public function user(){
        return $this->belongsTo('App\User');
    }
}
