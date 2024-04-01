<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProcessStep extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'description',
        'process_id',
    ];

    public function process()
    {
        return $this->belongsTo(Process::class);
    }

    public function attachments()
    {
        return $this->hasMany(ProcessStepAttachment::class);
    }


}
