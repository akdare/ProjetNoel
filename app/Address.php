<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Address extends Model
{
    protected $guarded = ['id'];

    public function persons()
    {
       return $this->hasMany('App\Person');
    }
    
    public function toString()
    {
        return $this->city .", ".$this->street.", ".$this->postal_code ;
    }
}
