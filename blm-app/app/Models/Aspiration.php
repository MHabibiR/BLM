<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Aspiration extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'title',
        'category',
        'description',
        'attachment_path',
        'is_anonymous',
        'status',
        'blm_response',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
