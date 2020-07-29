<?php

namespace App;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use Notifiable;

    const NUMERO_IDENTIFICACION_TRIBUTARIA = 'NIT';
    const CEDULA_CIUDADANIA = 'CC';


    protected $table = 'users';
    protected $primaryKey = 'id';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'first_name',
        'last_name',
        'type_document',
        'document',
        'email', 
        'phone',
        'admission_date',
        'salary',
        'password',
    ];

    protected $dates = [
        'admission_date',
        'updated_at',
        'created_at'
    ];
    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
        'admission_date' => 'date:d-m-Y'
    ];
}
