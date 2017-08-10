<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Task extends Model
{
    public static function scopeIncomplete($query) //scope Incomplete
    {
      return $query->where('complete', 0);
    }
}
