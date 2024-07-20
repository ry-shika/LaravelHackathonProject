<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Folder extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'place',
        'color',
        'shape',
        'time',
    ];

    // コメントとのリレーションシップを定義
    public function comments()
    {
        return $this->hasMany(Comment::class);
    }
}
