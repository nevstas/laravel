<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Log extends Model
{
    protected $fillable = [
        'contact_id',
        'status',
    ];

    ////////////////////////
    /// Гетеры
    ////////////////////////
    protected function getStatusHumanAttribute()
    {
        return __('logs.status_' . $this->status);
    }

    public function contact() {
        return $this->belongsTo('App\Contact');
    }
}
