<?php

namespace App;

// use Illuminate\Database\Eloquent\Model;
use Jenssegers\Mongodb\Eloquent\Model as Eloquent;
use App\Person;


class Contact extends Eloquent
{
    //
    protected $connection = 'mongodb';
    protected $collection = 'contact';
    protected $fillable = ['code','email', 'phone','address'];

    public function person()
    {
        return $this->hasOne('App\Person', 'contact_code' ,'code');
    }
}
