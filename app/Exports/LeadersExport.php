<?php

namespace App\Exports;

use App\Leader;
use Illuminate\Contracts\View\View;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\FromView;

class LeadersExport implements FromView
{

    /**
     * @return View
     */
    public function view(): View
    {
        $leaders = Leader::withCount('voters')->orderByDesc('voters_count')->get();
        return view('admin.print.leaders',['leaders' => $leaders]);
    }
}
