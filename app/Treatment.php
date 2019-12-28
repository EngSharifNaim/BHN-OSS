<?php

namespace App;

use App\CustomerTreatment;
use App\Department;
use App\TreatmentAttachment;
use App\TreatmentComponent;

use Illuminate\Database\Eloquent\Model;

class Treatment extends Model
{
    protected $fillable = [
        'name',
        'department_id',
        'components',

    ];

    protected $casts = [
        'components' => 'array'
    ];
    public  function treatmentAttachment(){
        return $this->hasMany(TreatmentAttachment::class,'attachment_id','id');
    }


    public  function treatmentComponent(){
        return $this->hasMany(TreatmentComponent::class,'treatment_id','id');
    }

    public  function department(){
        return $this->belongsTo(Department::class,'department_id','id');
    }

    public  function customerTreatment(){
        return $this->belongsTo(CustomerTreatment::class,'treatment_id','id');
    }
}
