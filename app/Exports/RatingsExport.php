<?php

namespace App\Exports;

use App\Rating;
use Maatwebsite\Excel\Concerns\FromCollection;

class RatingsExport implements FromCollection
{
    /**
     * @return \Illuminate\Support\Collection
     */
    public function collection()
    {
        return Rating::all();
    }
}

