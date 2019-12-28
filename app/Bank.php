<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\BankBranch;
class Bank extends Model
{
    protected $fillable = [
        'name',
        'address',
        'telephone',
        'email',
        'contact_person',

    ];
    public  function branch(){
        return $this->hasMany(BankBranch::class,'bank_id','id');
    }
}
