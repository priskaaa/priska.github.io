<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use PDF;
use App\Models\Outcome;

class OutcomeController extends Controller
{
    public function index(){
        $outcomes = Outcome::all();
        return view('pages.outcome',[
            'outcomes' => $outcomes,
        ]);
    }
    public function cetak()
    {
        $outcomes = Outcome::all();

        $pdf = PDF::Loadview('pages.data1_pdf',['outcomes'=>$outcomes]);
        return $pdf->stream();
        // return $pdf->download('laporan-data.pdf');
        
    }

    public function update(Request $request, $id){
        $income= Income::findOrFail($id);
        $quantity_out = $request->quantity;
        $quantity = $income->quantity - $quantity_out;

        $income['nama']->$nama;
        $income['nomor']->$nomor;
        $income['quantity']->$quantity;
        $income['bidang']->$bidang;
        $income['keterangan']->$keterangan;
        $income->save();
        return redirect()->route('income.index');

    }

    public function destroy(){
        $data = Outcome::findOrFail($id);
        $data->delete();

        return redirect()->route('outcome.index');

    }
}

   