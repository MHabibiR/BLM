<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Program extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'description',
        'status',
        'budget_allocated',
        'budget_used',
        'brief_report',
        'proposal_path',
        'lpj_path',
        'receipts_path',
    ];
}
