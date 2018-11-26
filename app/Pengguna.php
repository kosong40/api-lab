<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pengguna extends Model
{
    protected $fillable =[
        'id_pengguna','nama','role'
    ];
    protected $hidden=[
        'password'
    ];
}
