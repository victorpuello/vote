<?php

namespace App\Exports;

use App\Voter;
use Maatwebsite\Excel\Concerns\FromCollection;

class VotersExport implements FromCollection
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return Voter::all();
    }
}
