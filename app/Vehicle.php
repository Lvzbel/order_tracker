<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Vehicle extends Model
{
    public function getRouteKeyName()
    {
        return 'work_order';
    }
}