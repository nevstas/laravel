<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

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
        return $this->mb_ucfirst($value);
    }

    protected function getLastNameAttribute($value)
    {
        return $this->mb_ucfirst($value);
    }

    protected function getPatronymicAttribute($value)
    {
        return $this->mb_ucfirst($value);
    }

    protected function getFormatNameAttribute()
    {
        return $this->mb_ucfirst($this->last_name) . " " .
            $this->mb_ucfirst(mb_substr($this->first_name, 0, 1)) . ". " .
            $this->mb_ucfirst(mb_substr($this->patronymic, 0, 1)) . ".";
    }

    ////////////////////////
    /// Сетеры
    ////////////////////////
    protected function setFirstNameAttribute($value)
    {
        $this->attributes['first_name'] = $this->mb_ucfirst($value);
    }

    protected function setLastNameAttribute($value)
    {
        $this->attributes['last_name'] = $this->mb_ucfirst($value);
    }

    protected function setPatronymicAttribute($value)
    {
        $this->attributes['patronymic'] = $this->mb_ucfirst($value);
    }

    protected function setPhoneAttribute($value)
    {
        $this->attributes['phone'] = preg_replace("/[^0-9]+/", "", $value);
    }

    /*
     * Перенести в другое место
     */
    protected function mb_ucfirst($string, $encoding = 'UTF-8')
    {
        $strlen = mb_strlen($string, $encoding);
        $firstChar = mb_substr($string, 0, 1, $encoding);
        $then = mb_substr($string, 1, $strlen - 1, $encoding);
        return mb_strtoupper($firstChar, $encoding) . $then;
    }
}
