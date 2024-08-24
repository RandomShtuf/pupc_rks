<?php

namespace App\Models;

use Illuminate\Support\Str;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class ProcessStepAttachment extends Model
{
    use HasFactory;

    protected $fillable = [
        'process_step_id',
        'file',
        'note',
    ];

    public function processStep()
    {
        return $this->belongsTo(ProcessStep::class);
    }

    public function attachment()
    {
        return $this->belongsTo(AuditorAttachment::class);
    }

}
