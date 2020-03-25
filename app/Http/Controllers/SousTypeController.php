<?php

namespace App\Http\Controllers;
use App\type;
use App\sous_type;
use Illuminate\Http\Request;
use App\image_sous_type;
use Illuminate\Support\Facades\DB;

class SousTypeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $stp = DB::table('sous_types')
        ->join('types', 'sous_types.types_id', '=', 'types.id')
        ->leftJoin('image_sous_types', 'image_sous_types.sou_typs_id', '=', 'sous_types.id')
        ->select('sous_types.*', 'types.libelle_type','image_sous_types.src_image')
        ->orderBy('sous_types.created_at','desc')
        ->get();

         $typ=type::all();
//    =sous_type::all();
         return view('liste_sous_type',['stp'=>$stp,'typ'=>$typ]);

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
        $stp=new sous_type;
        $stp->lsotype=$request->libelstp;
        $stp->types_id=$request->types_id;
        $stp->save();

        $artic = sous_type::orderBy('sous_types.created_at','DESC')->first();
         $img=new image_sous_type;



         $file= $request->file('src_stp');
         $src=$file->store('imag');

         $pth=explode('/', $src);
         $src=$file->storeAs('imag',$pth[1],'public');


         $img->sou_typs_id=$artic->id;
         $img->src_image=$src;
         $img->save();

        return redirect('soustype');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\sous_type  $sous_type
     * @return \Illuminate\Http\Response
     */
    public function show(sous_type $sous_type)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\sous_type  $sous_type
     * @return \Illuminate\Http\Response
     */
    public function edit(sous_type $soustype)
    {

        $typ=type::all();
        $stp=sous_type::find($soustype->id);
        return view('modifier_sous_type',['sotp'=>$stp,'typ'=>$typ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\sous_type  $sous_type
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, sous_type $soustype)
    {
        $stp=sous_type::find($soustype->id);
        $stp->lsotype=$request->libeype;
        $stp->types_id=$request->types_id;
        $stp->save();
        return redirect('soustype');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\sous_type  $sous_type
     * @return \Illuminate\Http\Response
     */
    public function destroy(sous_type $soustype)
    {
        $stp=sous_type::find($soustype->id);
        $stp->delete();
        return redirect('soustype');
    }

    public function list(Request $request){

        $sou_typ = DB::table('sous_types')->where('types_id', '=',$request->id)->get();
        return  response()->json($sou_typ);
    }

    public function listesoustype($id){
        $stp = DB::table('sous_types')
        ->join('produits', 'sous_types.id', '=', 'produits.sous_types_id')
        ->leftJoin('image_sous_types', 'image_sous_types.sou_typs_id', '=', 'sous_types.id')
        ->select('sous_types.*', 'types.libelle_type','image_sous_types.src_image')
        ->orderBy('sous_types.created_at','desc')
        ->where('produits.type_categ_produit','vetement et accessoire')
        ->select('sous_types.*','image_sous_types.src_image')
        ->get();
        return $stp;
    }
}
