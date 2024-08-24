<?php

namespace App\Models;

use Illuminate\Support\Str;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class ProcessStep extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'description',
        'process_id',
        'attachment_title',
        'attachment_description',
        'attachment_course',
    ];

    public function displayTitle()
    {
        if ($this->title) {
            return Str::words($this->title, 3, '...');
        } elseif ($this->description) {
            return Str::words($this->description, 3, '...');
        } else {
            return '';
        }
    }

    public function process()
    {
        return $this->belongsTo(Process::class);
    }

    public function attachments()
    {
        return $this->hasMany(ProcessStepAttachment::class);
    }
}
