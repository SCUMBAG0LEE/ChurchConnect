<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Branch extends Model
{
    use HasFactory;
    protected $fillable = [
        'branch_id',
        'branch_name',
        'branch_address',
        'head_of_branch',
        'branch_start_date',
        'branch_website',
        'no_of_members',
    ];

    protected static function boot()
    {
        parent::boot();
        self::creating(function ($model) {
            $getUser = self::orderBy('branch_id', 'desc')->first();

            if ($getUser) {
                $latestID = intval(substr($getUser->branch_id, 5));
                $nextID = $latestID + 1;
            } else {
                $nextID = 1;
            }
            $model->branch_id = 'PRE_' . sprintf("%05s", $nextID);
            while (self::where('branch_id', $model->branch_id)->exists()) {
                $nextID++;
                $model->branch_id = 'PRE_' . sprintf("%05s", $nextID);
            }
        });
    }
}
