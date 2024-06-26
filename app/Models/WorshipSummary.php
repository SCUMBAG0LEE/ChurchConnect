<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class WorshipSummary extends Model
{
    use HasFactory;

    protected $fillable = [
        'worship_id',
        'speaker',
        'sermonTitle',
        'sermonContent',
        'bibleVerse',
    ];

    public function WorshipSummary()
    {
        return $this->belongsTo(WorshipSummary::class);
    }
}
