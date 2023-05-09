<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;
    protected $fillable = [
        'name',
        'user_id',

    ];
    protected $filltable = 'categories';
    public function courses()
    {
        return $this->hasMany(Course::class);
    }
    public function user() {
        return $this->belongsTo('App\Models\User','user_id');
    }

}
