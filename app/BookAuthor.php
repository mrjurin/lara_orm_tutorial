<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class BookAuthor extends Model
{
    
    protected $fillable = [
        'isbn','passport_number'
    ];
    
    public $timestamp=false;
    
}
