<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Location extends Model
{
    use HasFactory;

    //Relacion 1:M
    public function suppliers(): HasMany
    {
        return $this->hasMany(Supplier::class);
    } 
}
