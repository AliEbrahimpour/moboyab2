<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Ticket extends Model
{
    protected $fillable=['title','priority','message'];
//    public $timestamps=false;


    public function users(){
        return $this->belongsToMany(User::class);
    }
}
