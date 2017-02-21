<?php

namespace App\Models\Nations;

use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Model;

class Nations extends Model
{   
    use SoftDeletes;

    /**
     * @author Michel Everts <sitethief@gmail.com>
     * 
     * The attributes that are mass assignable.
     *
     * @var array $fillable
     */
    protected $fillable = [
        'name', 'description', 'capital', 'ruler_name',
    ];

    /**
     * @author Michel Everts <sitethief@gmail.com>
     * 
     * The attributes that should be hidden for arrays.
     *
     * @var array $hidden
     */
    protected $hidden = [
        'seed',
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
