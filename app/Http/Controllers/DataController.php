<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use PDF;
use App\Models\Income;

class DataController extends Controller
{
    public function index(){

        $data = Income::all();
        return view('pages.data',[
            'data'=>$data
        ]);

    }
    public function cetak_pdf()
    {
        $data = Income::all();

        $pdf = PDF::Loadview('pages.data_pdf',['data'=>$data]);
        return $pdf->stream();
        // return $pdf->download('laporan-data.pdf');
        
    }
}
