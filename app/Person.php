<?php

namespace App;

use App\Contact;
use Jenssegers\Mongodb\Eloquent\Model as Eloquent;

class Person extends Eloquent
{
    //
    protected $connection = "mongodb";
    protected $collection = "person";

    protected $fillable = ['name', 'position', 'salary', 'contact_code', 'gender'];

    public function contact()
    {
        return $this->hasOne('App\Contact', 'code' ,'contact_code');
    }
}
