<?php

namespace App\Imports;

use App\Models\BookingService;
use Maatwebsite\Excel\Concerns\ToModel;

class BookingServicesImport implements ToModel
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        return new BookingService([
            //
        ]);
    }
}
