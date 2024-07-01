<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ad extends Model
{
    use HasFactory;
    public function ad()
    {
        return $this->hasMany(Adconfig::class, 'Iklan_ID', 'Iklan_ID');
    }
}
