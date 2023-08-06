<?php

namespace App\Models;

//use Illuminate\Database\Eloquent\Factories\HasFactory; удаляем согласно книги
use Illuminate\Database\Eloquent\Model;

class Bb extends Model
{
    
    protected $fillable = [
        'title',
        'content',
        'price',
    ];

    public function user(){
        return $this->belongsTo(User::class);
    }
}
