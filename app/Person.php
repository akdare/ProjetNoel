<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Person extends Model
{

    protected $fillable = ['firstname', 'lastname', 'age', 'email', 'address_id'];

    public function address()
    {
        return $this->belongsTo('App\Address');
    }

    public function letters()
    {
        return $this->hasMany('App\Letter');
    }

    public function toString()
    {
        return $this->firstname ." ".$this->lastname." ".$this->id; 
    }
     public function fullname()
    {
        return $this->firstname ." ".$this->lastname;
    }
}
