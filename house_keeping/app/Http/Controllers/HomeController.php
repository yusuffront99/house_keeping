<?php

namespace App\Http\Controllers;

use App\Models\Weekly1;
use App\Models\Weekly2;
use App\Models\Weekly3;
use App\Models\Weekly4;
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
        $weekly1 = Weekly1::where('agenda','Minggu 1')->get();
        $weekly2 = Weekly2::where('agenda','Minggu 2')->get();
        $weekly3 = Weekly3::where('agenda','Minggu 3')->get();
        $weekly4 = Weekly4::where('agenda','Minggu 4')->get();

        $img_boil1 = Weekly1::take(2)->paginate(2);
        $img_boil2 = Weekly1::skip(2)->take(2)->get();
        $img_boil3 = Weekly1::skip(4)->take(2)->get();

        $img_weekly2_p1 = Weekly2::take(2)->paginate(2);
        $img_weekly2_p2 = Weekly2::skip(2)->take(2)->get();
        $img_weekly2_p3 = Weekly2::skip(4)->take(2)->get();

        $img_weekly3_p1 = Weekly3::take(2)->paginate(2);
        $img_weekly3_p2 = Weekly3::skip(2)->take(2)->get();
        $img_weekly3_p3 = Weekly3::skip(4)->take(2)->get();
        
        $img_weekly4_p1 = Weekly4::take(2)->paginate(2);
        $img_weekly4_p2 = Weekly4::skip(2)->take(2)->get();
        $img_weekly4_p3 = Weekly4::skip(4)->take(2)->get();

        $pdf = PDF::setPaper('a4', 'portrait')
        ->loadView('pages.report.laporan_house_keeping', [
            'weekly1' => $weekly1,
            'weekly2' => $weekly2,
            'weekly3' => $weekly3,
            'weekly4' => $weekly4,

            'img_boil1' => $img_boil1,
            'img_boil2' => $img_boil2,
            'img_boil3' => $img_boil3,

            'img_weekly2_p1' => $img_weekly2_p1,
            'img_weekly2_p2' => $img_weekly2_p2,
            'img_weekly2_p3' => $img_weekly2_p3,

            'img_weekly3_p1' => $img_weekly3_p1,
            'img_weekly3_p2' => $img_weekly3_p2,
            'img_weekly3_p3' => $img_weekly3_p3,

            'img_weekly4_p1' => $img_weekly4_p1,
            'img_weekly4_p2' => $img_weekly4_p2,
            'img_weekly4_p3' => $img_weekly4_p3,
        ]);
        return $pdf->stream();
    }
}
