<?php

namespace App\Entities;

use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    
    public function items()
    {
        return $this->belongsToMany(Item::class);
    }

    public function scopeSearch($query, string $search)
    {
        $query->where('first_name', 'like', "%${search}%")
            ->orWhere('last_name', 'like', "%${search}%");
    }
}
