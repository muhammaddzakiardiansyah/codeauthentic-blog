<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;

    // protected $fillable = ['judul', 'excrpt', 'caption'];
    protected $guarded = ['id'];

    public function category() {
        return $this->belongsTo(Category::class);
    }
}
