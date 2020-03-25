<?php

namespace App\Http\Controllers;

use App\upload;
use Illuminate\Http\Request;

class UploadController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $fi=upload::orderBy('created_at','DESC')->get();

        return view('affiche',['fi'=>$fi]);
    }
    public function affii(){
        $fi=upload::orderBy('created_at','DESC')->get();


        return response()->json(["a"=>$fi]);
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
        if($request->hasFile('file')){

            foreach($request->file as $file){
              $fi=$file->getClientOriginalName();

              $src=$file->store('omg');
              $pth=explode('/', $src);
              $src=$file->storeAs('imag',$pth[1],'public');

              $u=new upload;
              $u->src=$src;
              $u->save();

            }
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\upload  $upload
     * @return \Illuminate\Http\Response
     */
    public function show(upload $upload)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\upload  $upload
     * @return \Illuminate\Http\Response
     */
    public function edit(upload $upload)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\upload  $upload
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, upload $upload)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\upload  $upload
     * @return \Illuminate\Http\Response
     */
    public function destroy(upload $upload)
    {
        //
    }
}
