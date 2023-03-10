<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Release extends Model
{
    use HasFactory;
    //'date_start'
    //date_finish'
    /**
     * The attributes that should be mutated to dates.
     *
     * @var array
     */
    protected $dates = [        
        'date_start', 'date_finish'
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'date_start' => 'datetime:d-m-Y',
        'date_finish' => 'datetime:d-m-Y',        
    ];
    
    //Relacion Inversa M:1
    public function contract(): BelongsTo
    {
        return $this->belongsTo(Contract::class);
    }
}
