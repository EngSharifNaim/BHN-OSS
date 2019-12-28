<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Treatment;
Use App\User;
Use App\Customer;

class CustomerTreatment extends Model
{
    protected $fillable = [
        'customer_id',
        'user_id',
        'treatment_id',
        'title',
        'description',
        'current_area',
        'new_area',
        'current_street',
        'new_street',
        'current_position',
        'new_position',
        'current_block',
        'new_block',
        'current_parcel',
        'new_parcel',
        'building_number',
        'current_owner',
        'new_owner',
        'bank_id',
        'bank_name',
        'branch_name',
        'branch_id',
        'account_bank',
        'account_id',
        'maintenance_type',
        'company_name',
        'company_field',
        'company_project_name',
        'craft_type',
        'craft_no',

    ];

    public  function customer(){
        return $this->belongsTo(Customer::class,'customer_id','id');
    }


    public  function user(){
        return $this->belongsTo(User::class,'user_id','id');
    }

    public  function treatment(){
        return $this->hasMany(Treatment::class,'treatment_id','id');
    }



}
