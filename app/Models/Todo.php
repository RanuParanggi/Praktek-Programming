<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Todo extends Model
{
    use HasFactory;

    protected $fillable = [
        'judul',
        'keterangan',
        'completed_at',
    ];

    // Pastikan completed_at dianggap datetime
    protected $casts = [
        'completed_at' => 'datetime',
    ];

    // ✅ Tambahkan method ini
    public function isCompleted()
    {
        return !is_null($this->completed_at);
    }
}
