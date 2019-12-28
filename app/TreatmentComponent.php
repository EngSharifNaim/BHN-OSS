<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Treatment;
use App\Component;

class TreatmentComponent extends Model
{
    protected $fillable = [
        'treatment_id',
        'component_id',
        'required',
    ];
    public  function treatment(){
        return $this->belongsTo(Treatment::class,'treatment_id','id');
    }
    public  function component(){
        return $this->belongsTo(Component::class,'component_id','id');
    }


}
