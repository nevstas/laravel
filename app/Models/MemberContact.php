<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MemberContact extends Model
{
    use HasFactory;

    protected $fillable = [
        'first_name',
        'last_name',
        'patronymic',
        'phone',
        'address',
        'avatar',
        'status',
    ];

    public function logs()
    {
        return $this->hasMany('App\Models\Log');
    }

    public function user()
    {
        return $this->belongsTo('App\Models\User');
    }
}
