<?php

namespace App;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use App\Notifications\ResetPasswordNotification;
use Spatie\Activitylog\Traits\LogsActivity;
use Illuminate\Database\Eloquent\SoftDeletes;
use App\Access;

class User extends Authenticatable {

  use Notifiable;
  use LogsActivity, SoftDeletes;

  protected $fillable = [
    'id_access', 'username', 'name', 'email', 'phone', 'password', 'address_1', 'address_2'
  ];

  protected $hidden = [
    'password', 'remember_token',
  ];

  protected $casts = [
    'email_verified_at' => 'datetime',
  ];

  protected static $logAttributes = ['*'];

  public function sendPasswordResetNotification($token) {
    $this->notify(new ResetPasswordNotification($token));
  }

  public function accesses(){
    return $this->belongsTo(Access::class, 'id_access');
  }

}
