<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Log extends Model
{
    use HasFactory;

    protected $fillable = [
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
        return $this->belongsTo('App\Models\Contact');
    }
}
