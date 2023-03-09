<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class ContactWay extends Model
{
    use HasFactory;   

    //Relacion Inversa M:1
    public function contact(): BelongsTo
    {
        return $this->belongsTo(Contact::class);        
    }    
}
