<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Arr;
use Carbon\Carbon;


class Article extends Model
{
    use HasFactory;
    public static function find($Url) {
        
        $post = Arr::first(static::all(), function($post) use ($Url) {
            return $post['Url'] == $Url;
        });
        if (!$post) {
            abort(404);
        }
        return $post;
    }   

    public function user()
    {
        return $this->belongsTo(User::class, 'penulis_ID', 'id');
    }
    public function scopeFilters($query, array $filter) {
        $query->when($filter['search'] ?? false, function ($query, $search) {
            return $query->where('Nama_article', 'like', '%'. $search. '%');
        });

    }
}
