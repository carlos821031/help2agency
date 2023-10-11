<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BookingService extends Model
{
    use HasFactory;
    protected $guarded = [       
    ];    

    /*
    public function getTableColumns() {//funcion para obtener las columnas de la tabla utilizada en el exportar para los titulos de sus columnas. Aun no la utilizo
        return $this->getConnection()->getSchemaBuilder()->getColumnListing($this->getTable());
    }
    */
}
