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
        'counter_view',
        'is_delete',
    ];

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
            mb_substr(strtoupper($this->first_name), 0, 1) . ". " .
            mb_substr(strtoupper($this->patronymic), 0, 1) . ".";
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
