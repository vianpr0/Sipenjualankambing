<?php

namespace App\Models;

use Illuminate\Support\Arr;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Section extends Model
{
    use HasFactory;
    public function article() {
        return $this->hasMany(Article::class,  'section_id', 'section_id');
    }
    public function subsection() {
        return $this->hasMany(Subsection::class,  'section_id', 'subsection_id');
    }
    public static function find($Url) {
        
        $category = Arr::first(static::all(), function($post) use ($Url) {
            return $post['Nama_Section'] == $Url;
        });
        if (!$category) {
            abort(404);
        }
        return $category;
    }  
}
