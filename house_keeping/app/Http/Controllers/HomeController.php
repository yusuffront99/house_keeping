<?php

namespace App\Http\Controllers;

use App\Models\Weekly1;
use Illuminate\Http\Request;
use Barryvdh\DomPDF\Facade\Pdf as PDF;

class HomeController extends Controller
{
    public function home()
    {
        return view('pages.home');
    }

    public function print()
    {
        $reports = Weekly1::all();

        $pdf = PDF::setPaper('a4', 'portrait')
        ->loadView('pages.report.house_keeping', compact('reports'));
        return $pdf->stream();
    }
}
