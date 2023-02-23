<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class BankCard extends Model
{
    use HasFactory;
    
    protected $fillable = ['alias', 'bank_card_number', 'description'];

    //Relacion Inversa 1:M
    public function contact(): BelongsTo
    {
        return $this->belongsTo(Contact::class);        
    }

    //Relacion Inversa 1:M
    public function currency(): BelongsTo
    {
        return $this->belongsTo(Currency::class);        
    } 
}
