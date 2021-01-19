<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Http\Controllers\SystemController;

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
        return SystemController::mb_ucfirst($value);
    }

    protected function getLastNameAttribute($value)
    {
        return SystemController::mb_ucfirst($value);
    }

    protected function getFormatNameAttribute()
    {
        $name = SystemController::mb_ucfirst(mb_substr($this->first_name, 0, 1))
            . '. '
            . SystemController::mb_ucfirst($this->last_name);

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

    protected function getPhoneArrAttribute()
    {
        return json_decode($this->phone, true);
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

    protected function setPhoneAttribute($value)
    {
        if (is_array($value)) {
            foreach ($value as $key => $phone) {
                $value[$key] = preg_replace("/[^0-9\+]+/", "", $phone);
            }
        }
        $this->attributes['phone'] = json_encode($value);
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
