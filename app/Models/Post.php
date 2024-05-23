<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;

    protected $fillable = ['title', 'author', 'body']; // Menambahkan kolom yang dapat diisi

    public static function getAllPosts()
    {
        return [
            [
                'id' => '11',
                'title' => 'judul artikel 1',
                'author' => 'yoss sianipar',
                'body' => 'ipsum dolor sit, amet consectetur adipisicing elit. Numquam cumque aperiam omnis distinctio deleniti vitae tenetur aliquam, eos inventore soluta error. Eveniet molestias dolorum aspernatur ducimus cupiditate temporibus omnis delectus?',
            ],
            [
                'id' => '2',
                'title' => 'judul artikel 2',
                'author' => 'yoss sianipar',
                'body' => 'ipsum dolor sit, amet consectetur adipisicing elit. Numquam cumque aperiam omnis distinctio deleniti vitae tenetur aliquam, eos inventore soluta error. Eveniet molestias dolorum aspernatur ducimus cupiditate temporibus omnis delectus?',
            ],
            [
                'id' => '22',
                'title' => 'judul artikel 3',
                'author' => 'yoss sianipar',
                'body' => 'ipsum dolor sit, amet consectetur adipisicing elit. Numquam cumque aperiam omnis distinctio deleniti vitae tenetur aliquam, eos inventore soluta error. Eveniet molestias dolorum aspernatur ducimus cupiditate temporibus omnis delectus?',
            ]
        ];
    }
}