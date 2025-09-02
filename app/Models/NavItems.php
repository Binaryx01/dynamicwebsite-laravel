<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class NavItems extends Model
{
    protected $fillable=[

        'title',
        'url',
        'parent_id',
        'order',
        'role'

    ];
}
