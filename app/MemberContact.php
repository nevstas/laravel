<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Http\Controllers\SystemController;

class MemberContact extends Model
{
    protected $fillable = [
        'user_id',
        'first_name',
        'last_name',
        'patronymic',
        'phone',
        'address',
        'avatar',
        'counter_view',
        'status',
        'is_delete',
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
