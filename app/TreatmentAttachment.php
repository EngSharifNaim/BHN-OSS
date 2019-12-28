<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Attachment;
use App\Treatment;

class TreatmentAttachment extends Model
{
    //
    protected $fillable = [
        'treatment_id',
        'attachment_id',
        'image'
                          ];

    public  function attachment(){
        return $this->hasMany(Attachment::class,'attachment_id','id');
    }

    public  function treatment(){
        return $this->belongsTo(Treatment::class,'treatment_id','id');
    }
}
