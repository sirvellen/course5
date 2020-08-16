<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TaskList extends Model
{

    protected $primaryKey = 'list_id';

    protected $fillable = [
        'desk_id',
        'list_name',
    ];

}
