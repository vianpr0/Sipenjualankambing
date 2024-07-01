<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Adconfig extends Model
{
    use HasFactory;
    public function ad()
    {
        return $this->belongsTo(Ad::class, 'Iklan_ID', 'Iklan_ID');
    }
}
