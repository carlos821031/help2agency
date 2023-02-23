<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Supplier extends Model
{
    use HasFactory;
    //Relacion 
    public function location(): BelongsTo
    {
        return $this->belongsTo(Location::class);        
    }

    //Relacion M:M
    public function contacts(): BelongsToMany{
        return $this->belongsToMany(Contact::class)->using(ContactSupplier::class);
    }
}
