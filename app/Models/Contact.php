<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Contact extends Model
{
    use HasFactory;
    
    protected $fillable = ['name', 'last_name_1', 'last_name_2', 'email', 'nationality', 'description', 'job', 'show_as', 'page_web', 'address', 'privacy', 'phone']; 
    
    //Relacion 1:M
    public function contact_ways(): HasMany{
        return $this->hasMany(ContactWay::class);
    }    
    public function bank_cards(): HasMany{
        return $this->hasMany(BankCard::class);
    }
    //Relacion M:M
    public function suppliers(): BelongsToMany{
        return $this->belongsToMany(Supplier::class)->using(ContactSupplier::class);
    }
}