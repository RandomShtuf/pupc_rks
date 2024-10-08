<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Process extends Model
{
    use HasFactory;

    protected $fillable = ['title', 'description'];

    public function steps()
    {
        return $this->hasMany(ProcessStep::class);
    }

    public function sections()
    {
        return $this->hasMany(Section::class);
    }

    public function records()
    {
        return $this->hasMany(Record::class);
    }
}
