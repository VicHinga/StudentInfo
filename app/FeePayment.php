<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class FeePayment extends Model
{
    //Table Name
    protected $table = 'fee_payments';
    //Primary Key
    public $primaryKey = 'id';
    //Timestamp
    public $timestamps = false; 
    //the values in table
    protected $fillable = [ 'Full_Name','Amount','Date_of_Payment' ];
    
    /*function for relationship with profile
     get the profile that owns many payments
    */
    public function profile()
    {
        return $this->belongsTo(Profile::class);
    }
}
