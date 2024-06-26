<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Worship extends Model
{
    use HasFactory;

    protected $fillable = ['date', 'title', 'note']; // Added 'note'

    public function members()
    {
        return $this->belongsToMany(Member::class, 'worship_member')->withPivot('position')->withTimestamps();
    }
}
