<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\TreatmentComponent;

class Component extends Model
{
    protected $fillable = [
        'name',
        'slug',
       ];

    public  function treatmentComponent(){
        return $this->hasMany(TreatmentComponent::class,'component_id','id');
    }

}
