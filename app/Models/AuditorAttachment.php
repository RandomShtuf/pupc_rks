<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AuditorAttachment extends Model
{
    use HasFactory;

    protected $fillable = [
        'process_step_attachment_id',
    ];

    public function processStepAttachment()
    {
        return $this->belongsTo(ProcessStepAttachment::class, 'process_step_attachment_id');
    }
}
