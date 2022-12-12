<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;

    // protected $fillable = ['judul', 'excrpt', 'caption'];
    protected $guarded = ['id'],
              $with = ['category', 'user'];

    public function category() {
        return $this->belongsTo(Category::class);
    }

    public function user() {
        return $this->belongsTo(User::class);
    }

    // public function post() {
    //     return $this->belongsTo(Post::class);
    // }
}
