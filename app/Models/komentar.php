<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class komentar extends Model
{
    use HasFactory;
    protected $table = 'komentar';
    protected $fillable = [
        'Isi',
        'ID_user',
        'ID_filem'];
        protected $casts = [
            'email_verified_at' => 'datetime',
            'timestamps' => 'hashed',
        ];
}
