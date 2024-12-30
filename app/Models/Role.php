<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Role extends Model
{
    protected $table = 'roles';

    protected $fillable = ['department_id','name', 'description'];

    protected $guarded = ['id', 'created_at', 'updated_at'];

    protected $hidden = ['created_at', 'updated_at'];

    protected $dateformat = 'Y-m-d H:i:s.u';

    protected $casts = [
        'id' => 'integer',
        'department_id' => 'integer',
        'name' => 'string',
        'description' => 'string',
        'created_at' => 'datetime',
        'updated_at' => 'datetime',
    ];
}
