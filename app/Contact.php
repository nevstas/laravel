<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Http\Controllers\SystemController;

class Contact extends Model
{
    protected $fillable = [
        'first_name',
        'last_name',
        'patronymic',
        'phone',
        'address',
        'avatar',
        'counter_view',
        'is_delete',
    ];

    ////////////////////////
    /// Гетеры
    ////////////////////////
    protected function getFirstNameAttribute($value)
    {
        return SystemController::mb_ucfirst($value);
    }

    protected function getLastNameAttribute($value)
    {
        return SystemController::mb_ucfirst($value);
    }

    protected function getPatronymicAttribute($value)
    {
        return SystemController::mb_ucfirst($value);
    }

    protected function getFormatNameAttribute()
    {
        return htmlspecialchars(SystemController::mb_ucfirst($this->last_name) . " " .
            SystemController::mb_ucfirst(mb_substr($this->first_name, 0, 1)) . ". " .
            SystemController::mb_ucfirst(mb_substr($this->patronymic, 0, 1)) . ".");
    }

    ////////////////////////
    /// Сетеры
    ////////////////////////
    protected function setFirstNameAttribute($value)
    {
        $this->attributes['first_name'] = SystemController::mb_ucfirst($value);
    }

    protected function setLastNameAttribute($value)
    {
        $this->attributes['last_name'] = SystemController::mb_ucfirst($value);
    }

    protected function setPatronymicAttribute($value)
    {
        $this->attributes['patronymic'] = SystemController::mb_ucfirst($value);
    }

    protected function setPhoneAttribute($value)
    {
        $this->attributes['phone'] = preg_replace("/[^0-9\+]+/", "", $value);
    }

    public function logs()
    {
        return $this->hasMany('App\Log');
    }
}
