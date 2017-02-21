<?php

namespace App\Models\Auth;

use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Notifications\Notifiable;

class Users extends Authenticatable
{   
    use Notifiable;
    use SoftDeletes;

    /**
     * @author Michel Everts <sitethief@gmail.com>
     * 
     * The attributes that are mass assignable.
     *
     * @var array $fillable
     */
    protected $fillable = [
        'name', 'email', 'password',
    ];

    /**
     * @author Michel Everts <sitethief@gmail.com>
     * 
     * The attributes that should be hidden for arrays.
     *
     * @var array $hidden
     */
    protected $hidden = [
        'password', 'remember_token',
    ];
    
    /**
     * @author Michel Everts <sitethief@gmail.com>
     * 
     * All date fields.
     *
     * @var array $dates
     */
    protected $dates = [
        'created_at', 'updated_at', 'deleted_at',
    ];
    
}
