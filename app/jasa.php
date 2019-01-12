<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class jasa extends Model
{
    protected $table = 'jasa';
    protected $fillable = ['nama','deskripsi'];
}
