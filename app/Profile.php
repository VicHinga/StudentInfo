<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Profile extends Model
{
    //Table Name
    protected $table = 'profiles';
    //Primary Key
    public $primaryKey = 'id';
    //Timestamp
    public $timestamps = false;
    
    /*Relationship profile(student) own many fee payment*/
    public function feepayments()
    {
        return $this->hasMany(FeePayment::class);
    }
} 
