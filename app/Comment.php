<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    protected $primaryKey='comment_id';
    
    public $timestamp=false;
    
    protected $fillable=[
        'content','post_id','comment_id'  
    ];
    
    public function post(){
        return $this->belongsTo('App\Post', 'post_id','post_id');
    }
}
