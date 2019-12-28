<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Treatment;
use App\User;
class Department extends Model
{
    protected $fillable = [
        'name',
        'manger_id',
        'inner_telephone',

    ];
    public  function treatment(){
        return $this->hasMany(Treatment::class,'department_id','id');
    }
    public  function user(){
        return $this->belongsTo(User::class,'manger_id','id');
    }
}
