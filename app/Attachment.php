<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\AttachmentFile;
use  App\TreatmentAttachment;
class Attachment extends Model
{
    //
    protected $fillable = [
        'name',

    ];
    public  function attachmentFile(){
        return $this->belongsTo(AttachmentFile::class,'attachment_id','id');
    }
    public  function treatmentAttachment(){
        return $this->belongsTo(TreatmentAttachment::class,'treatment_id','id');
    }
}
