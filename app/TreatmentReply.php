<?php

namespace App;
use App\Treatment;
use App\User;

use Illuminate\Database\Eloquent\Model;

class TreatmentReply extends Model
{
    protected $fillable = [
        'treatment_id',
        'user_id',
        'opinion',
        'comment',
    ];
    public  function user(){
        return $this->belongsTo(User::class,'user_id','id');
    }
    public  function treatment(){
        return $this->belongsTo(Treatment::class,'treatment_id','id');
    }
}
