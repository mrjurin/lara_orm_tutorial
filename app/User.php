<?php

namespace App;

use Illuminate\Foundation\Auth\User as Authenticatable;


class User extends Authenticatable
{
    
    protected $primaryKey='passport_number';
  
    protected $fillable = [
        'first_name','last_name','passport_number'
    ];
    
    public function passport(){
        return $this->hasOne('App\Passport','passport_number','passport_number');
    }
    
    public function posts(){
        return $this->hasMany('App\Post','passport_number','passport_number');
    }
    
    public function books(){
        return $this->belongsToMany('App\Book','book_authors','passport_number','isbn');
    }
}
