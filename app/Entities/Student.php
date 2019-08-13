<?php

namespace App\Entities;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Arr;
use Laravel\Scout\Searchable;

class Student extends Model
{

    use Searchable;

    public function toSearchableArray()
    {
        $arr = [
            $this->first_name,
            $this->last_name,
            $this->items->pluck('name')->all()
        ];
        return Arr::flatten($arr);
    }
    
    public function items()
    {
        return $this->belongsToMany(Item::class);
    }

    public function scopeSearch($query, string $search)
    {
        $query->where('first_name', 'like', "%${search}%")
            ->orWhere('last_name', 'like', "%${search}%")
            ->orWhereHas('items', function($builder) use ($search) {
                $builder->where('name', 'like', "%${search}%");
            });
    }
}
