<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Subject extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'section_id', 'file'];

    public function section()
    {
        return $this->belongsTo(Section::class);
    }

    public function records()
    {
        return $this->hasMany(Record::class);
    }
}
