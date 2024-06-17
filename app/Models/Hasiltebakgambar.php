<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Hasiltebakgambar extends Model
{
    use HasFactory;
    protected $fillable = [
        'user_id',
        'waktu',
    ];

    /**
     * Get the user that owns the hasilujikom.
     */
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
