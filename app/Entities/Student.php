<?php

namespace App\Entities;

use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    
    public function items()
    {
        return $this->belongsToMany(Item::class);
    }
}
