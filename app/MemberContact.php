<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Http\Controllers\SystemController;

class MemberContact extends Model
{
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
        return $this->hasMany('App\Log');
    }

    public function user()
    {
        return $this->belongsTo('App\User');
    }
}
