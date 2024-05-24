<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'title',
        'content',
        'path'
    ];

    protected static function scopeDesc($query){
        return $query->orderby('id', 'desc')->get();
    }

    public $directory = '/image/';
    public function getPathAttribute($value){
        return $this->directory.$value;
    }
}
