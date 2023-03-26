<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\HasManyThrough;

class Contract extends Model
{
    use HasFactory;

    /**
     * The attributes that should be mutated to dates.
     *
     * @var array
     */
    protected $dates = [
        'Period_Start', 'Period_Finish', 'Date_Sing'
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'Period_Start' => 'datetime:d-m-Y',
        'Period_Finish' => 'datetime:d-m-Y',
        'Date_Sing' => 'datetime:d-m-Y'
    ];

    //Relacion Inversa M:1
    public function supplier(): BelongsTo
    {
        return $this->belongsTo(Supplier::class);
    }

    //Relacion Inversa M:1
    public function currency(): BelongsTo
    {
        return $this->belongsTo(Currency::class);
    }

    //Relacion Inversa M:1
    public function category(): BelongsTo
    {
        return $this->belongsTo(Category::class);
    }
    //Relacion 1:M
    public function releases(): HasMany
    {
        return $this->hasMany(Release::class);
    }    
}
