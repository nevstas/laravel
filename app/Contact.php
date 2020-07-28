<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Contact extends Model
{
    protected $fillable = [
        'counter_view'
    ];

    protected function getFirstNameAttribute($value)
    {
        return $this->mb_ucfirst($value, 'UTF-8');
    }

    protected function getLastNameAttribute($value)
    {
        return $this->mb_ucfirst($value, 'UTF-8');
    }

    protected function getPatronymicAttribute($value)
    {
        return $this->mb_ucfirst($value, 'UTF-8');
    }

    /*
     * Перенести в другое место
     */
    protected function mb_ucfirst($string, $encoding)
    {
        $strlen = mb_strlen($string, $encoding);
        $firstChar = mb_substr($string, 0, 1, $encoding);
        $then = mb_substr($string, 1, $strlen - 1, $encoding);
        return mb_strtoupper($firstChar, $encoding) . $then;
    }
}
