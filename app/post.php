<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class post extends Model
{
    protected $fillable =[


        'id_p',
        'name_p',
        'img',
        'disc',
        'category'

    ];

public function post()
{
    return $this->belongsTo('App\post');
}



}
