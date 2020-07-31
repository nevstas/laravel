<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Log extends Model
{
    protected $fillable = [
        'contact_id',
        'status',
    ];

    protected $statuses = [
        'view' => 'Просмотрено',
    ];

    ////////////////////////
    /// Гетеры
    ////////////////////////
    protected function getStatusHumanAttribute()
    {
        return $this->statuses[$this->status] ?? '';
    }
}
