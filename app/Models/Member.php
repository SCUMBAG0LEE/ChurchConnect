<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Member extends Model
{
    use HasFactory;

    protected $fillable = [
        'first_name',
        'last_name',
        'gender',
        'date_of_birth',
        'address',
        'email',
        'phone_number',
        'church_branch',
        'role',
        'position',
        'cell',
        'upload',
    ];

    public function worships()
    {
        return $this->belongsToMany(Worship::class, 'worship_member')->withPivot('position')->withTimestamps();
    }
}

