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
        'content', // Change 'sermonContent' to 'content'
        'bibleVerse',
    ];

    public function worship()
    {
        return $this->belongsTo(Worship::class, 'worship_id');
    }
}
