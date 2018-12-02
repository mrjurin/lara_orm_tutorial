<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Passport extends Model
{
    protected $primaryKey="passport_number";
    
    protected $fillable=[
      'passport_number','issued_date','valid_till'  
    ];
    
    public function user(){
        return $this->belongsTo('App\User','passport_number','passport_number');
    }
}
