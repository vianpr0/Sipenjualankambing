<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Arr;
use Carbon\Carbon;
use Conner\Tagging\Taggable;
use Illuminate\Support\Facades\Cache;

class Article extends Model
{
    use Taggable;
    use HasFactory;
    protected $primaryKey = 'article_id';

    
    protected static function booted()
    {
        static::saved(function ($article) {
            // Hapus cache 'query' setiap kali artikel disimpan
            Cache::forget('query');
        });

        static::deleted(function ($article) {
            // Hapus cache 'query' setiap kali artikel dihapus
            Cache::forget('query');
        });
    }
    public static function findByUrl($url) {
        $post = static::where('Url', $url)->first();

        if (!$post) {
            abort(404);
        }

        return $post;
    }
    


    public function user()
    {
        return $this->belongsTo(User::class, 'penulis_ID', 'id');
    }
    public function editor()
    {
        return $this->belongsTo(User::class, 'editor_ID', 'id');
    }
    public function section()
    {
        return $this->belongsTo(Section::class, 'section_id', 'section_id');
    }
    public function subsection()
    {
        return $this->belongsTo(Subsection::class, 'subsection_id', 'subsection_id');
    }

    public function scopeFilters($query, array $filter) {
        $query->when($filter['search'] ?? false, function ($query, $search) {
            return $query->where('Nama_article', 'like', '%'. $search. '%');
        });

    }
}
