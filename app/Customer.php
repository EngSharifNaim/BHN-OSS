<?php

namespace App;
use App\CustomerTreatment;

use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    protected $fillable = [
        'name',
        'id_no',
        'mobile',
        'telephone',
        'address',
        'email',
        'password',
    ];

    public  function customerTreatment(){
        return $this->hasMany(CustomerTreatment::class,'treatment_id','id');
    }

}
