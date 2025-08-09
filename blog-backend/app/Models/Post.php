<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;

    // Boleh diisi via create() atau update()
    protected $fillable = [
        'title',
        'content',
    ];

    // Relasi ke user
    public function user()
    {
        return $this->belongsTo(User::class);
    }

    // // Boleh diisi via create() atau update()
    // protected $fillable = ['title', 'content', 'user_id'];

    // // Relasi ke user
    // public function user()
    // {
    //     return $this->belongsTo(User::class);
    // }
}
