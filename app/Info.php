<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Info extends Model
{
    public $timestamps = false;

    protected $fillable = [
        'telephon', 'avatar', 'user_id',
    ];

    public function user(){
        return $this->belongsTo('App\User');
    }


}
