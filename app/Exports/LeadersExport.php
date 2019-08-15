<?php

namespace App\Exports;

use App\Leader;
use Maatwebsite\Excel\Concerns\FromCollection;

class LeadersExport implements FromCollection
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return Leader::all();
    }
}
