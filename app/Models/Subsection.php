<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Subsection extends Model
{
    use HasFactory;
    public function section()
    {
        return $this->belongsTo(Section::class, 'subsection_id', 'section_id');
    }
    public function articles()
    {
        return $this->hasMany(Article::class, 'subsection_id', 'subsection_id');
    }
}
