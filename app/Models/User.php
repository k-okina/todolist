<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

    protected $table = 'users';

    /**
     * 更新不可能な値
     *
     * @var array
     */
    protected $guarded = ['id'];

    /**
     * The attributes that should be hidden for json arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password',
    ];

    /**
     * 型キャスト
     *
     * @var array
     */
    protected $casts = [
        'is_deleted' => 'boolean',
    ];
}
