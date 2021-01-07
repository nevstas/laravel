<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Contact extends Model
{
    use HasFactory;

    protected $fillable = [
        'first_name',
        'last_name',
        'phone',
        'address',
        'avatar',
        'status',
    ];

    ////////////////////////
    /// Гетеры
    ////////////////////////
    protected function getFirstNameAttribute($value)
    {
        return \App\Http\Controllers\SystemController::mb_ucfirst($value);
    }

    protected function getLastNameAttribute($value)
    {
        return \App\Http\Controllers\SystemController::mb_ucfirst($value);
    }

    protected function getFormatNameAttribute()
    {
        $name = \App\Http\Controllers\SystemController::mb_ucfirst(mb_substr($this->first_name, 0, 1))
            . '. '
            . \App\Http\Controllers\SystemController::mb_ucfirst($this->last_name);

        return $name;
    }

    protected function getStatusHumanAttribute()
    {
        return __('contacts.status_' . $this->status);
    }

    protected function getAvatarAttribute($value)
    {
        return $value ? 'storage/' . $value : 'img/no-image.jpg';
    }

    ////////////////////////
    /// Сетеры
    ////////////////////////
    protected function setFirstNameAttribute($value)
    {
        $this->attributes['first_name'] = \App\Http\Controllers\SystemController::mb_ucfirst($value);
    }

    protected function setLastNameAttribute($value)
    {
        $this->attributes['last_name'] = \App\Http\Controllers\SystemController::mb_ucfirst($value);
    }

    protected function setPhoneAttribute($value)
    {
        $this->attributes['phone'] = preg_replace("/[^0-9\+]+/", "", $value);
    }

    public function logs()
    {
        return $this->hasMany('App\Models\Log');
    }

    public function user()
    {
        return $this->belongsTo('App\Models\User');
    }
}
