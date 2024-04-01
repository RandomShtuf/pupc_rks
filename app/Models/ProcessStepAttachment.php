<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProcessStepAttachment extends Model
{
    use HasFactory;

    protected $fillable = [
        'process_step_id',
        'title',
        'description',
        'course',
        'file',
        'note',
    ];

    public function processStep()
    {
        return $this->belongsTo(ProcessStep::class);
    }

}
