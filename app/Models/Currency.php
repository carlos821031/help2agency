<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Currency extends Model
{
    use HasFactory;   

    protected $fillable = ['full_name', 'short_name', 'exchange_rate']; 

    //Relacion 1:M
    public function bank_cards(): HasMany{
        return $this->hasMany(BankCard::class);
    }
}
