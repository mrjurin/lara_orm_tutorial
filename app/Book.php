<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    protected $primaryKey='isbn';
    
    public $timestamp=false;
    
    public $incrementing=false;
    
    protected $fillable=[
        'isbn','title','publish_year'    
    ];
    
    public function authors(){
        return $this->belongsToMany('App\User','book_authors','isbn','passport_number');
    }

}
