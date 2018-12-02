<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    protected $primaryKey ='post_id';
    
    protected $fillable=[
        'post_id','content','title','passport_number'    
    ];
    
    public $timestamp=false;
    
    public function comments(){
        return $this->hasMany('App\Comment','post_id','post_id');
    }
    
    public function user(){
        return $this->belongsTo('App\User','passport_number','passport_number');
    }
}
