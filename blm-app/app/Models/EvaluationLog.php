<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class EvaluationLog extends Model
{
    use HasFactory;

    protected $fillable = [
        'program_id',
        'blm_user_id',
        'notes',
    ];

    public function program()
    {
        return $this->belongsTo(Program::class);
    }

    public function blmUser()
    {
        return $this->belongsTo(User::class, 'blm_user_id');
    }
}
