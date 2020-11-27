<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Income;
use App\Models\Outcome;

class IncomeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $incomes=Income::all();
        return view('pages.income',[
            'incomes' => $incomes
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = $request->all();
        Income::create($data);

        return redirect()->route('income.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        // $item = Income::FindOrFail($id);

        // return view('pages.edit',[
        //    'item' => $item 
        // ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $data = $request->all();
        Outcome::create([
            'tanggal' => $request['tanggal'],
            'nomor' => $request['nomor'],
            'nama' => $request['nama'],
            'quantity' => $request['quantity'],
        
            'income_id' => $id,
            'bidang' => $request['bidang'],
            'keterangan' => $request['keterangan'],
        ]);
            $item = Income::FindOrFail($id);
            $qty=$item->quantity - $request['quantity'];
            $hasil = $qty;

           
            $item->update([
                'quantity' => $hasil,
               
            ]);
        return redirect()->route('outcome.index');
    
    }

    public function ubah(Request $request, $id){
        $data = $request->all();
        $item = Income::FindOrFail($id);
        $item -> update($data);

        return redirect()->route('income.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $data = Income::findOrFail($id);
        $data->delete();

        return redirect()->route('income.index');
    }
}
