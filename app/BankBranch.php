<?php

namespace App;
use App\Bank;
use Illuminate\Database\Eloquent\Model;

class BankBranch extends Model
{  protected $fillable = [
    'bank_id',
    'branch_no',
    'branch_name',
    'branch_telephone',
    'contact_person',

];
public  function bank(){
    return $this->belongsTo(Bank::class,'bank_id','id');
}
}
