<?php

namespace App\Http\Controllers;

use App\univer;
use Illuminate\Http\Request;

class UniverController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $uni=univer::all();

        return view('liste_univer',['uni'=>$uni]);
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
        $uni=new univer;
        $uni->type_univer=$request->nom_univer;
        $uni->save();
        return redirect('univer');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\univer  $univer
     * @return \Illuminate\Http\Response
     */
    public function show(univer $univer)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\univer  $univer
     * @return \Illuminate\Http\Response
     */
    public function edit(univer $univer)
    {
        $uni=univer::find($univer->id);
        return view('modifier_univer',['uni'=>$uni]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\univer  $univer
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, univer $univer)
    {
        //type_univer
        $uni=univer::find($univer->id);
        $uni->type_univer=$request->type_univer;
        $uni->save();
        return redirect('univer');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\univer  $univer
     * @return \Illuminate\Http\Response
     */
    public function destroy(univer $univer)
    {

        $uni=univer::find($univer->id);
        $uni->delete();
        return redirect('univer');
    }
}
