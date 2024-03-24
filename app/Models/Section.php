<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Section extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'process_id'];

    public function process()
    {
        return $this->belongsTo(Process::class);
    }

    public function subjects()
    {
        return $this->hasMany(Subject::class);
    }

    public function records()
    {
        return $this->hasMany(Record::class);
    }
}
