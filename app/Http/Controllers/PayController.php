<?php

namespace App\Http\Controllers;

use App\pay;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PayController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

       $pay=pay::orderBy('created_at','DESC')->get();
        return view('liste_pays',['pay'=>$pay]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $pay=new pay;
        $pay->nom_pays=$request->nom_pays;
        $pay->save();
        return redirect('pay');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\pay  $pay
     * @return \Illuminate\Http\Response
     */
    public function show(pay $pay)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\pay  $pay
     * @return \Illuminate\Http\Response
     */
    public function edit(pay $pay)
    {
        $py=pay::find($pay->id);
        return view('modifier_pays',['py'=>$py]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\pay  $pay
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, pay $pay)
    {
        $py=pay::find($pay->id);
        $py->nom_pays=$request->nom_pays;
        $py->save();
        return redirect('pay');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\pay  $pay
     * @return \Illuminate\Http\Response
     */
    public function destroy(pay $pay)
    {

        $py=pay::find($pay->id);
        $py->delete();
        return redirect('pay');

    }
}
