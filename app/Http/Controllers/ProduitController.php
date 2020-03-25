<?php

namespace App\Http\Controllers;
use App\type;
use Illuminate\Support\Facades\DB;
use App\sous_type;
use App\pay;
use App\ville;
use App\image;
use App\produit_rayon;
use App\univer;
use App\stock;
use App\rayon;
use App\produit;
use App\couleur;
use App\produit_couleur;

use Illuminate\Http\Request;

class ProduitController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $typ=type::all();
        $clr=couleur::all();

        $stk=stock::all();
        $uni=univer::all();
        // $image=image::all();
        // $produt= DB::table('produits')
        // ->leftJoin('produit_couleurs','produit_couleurs.produits_id','=','produits.id')
        // ->groupBy('produits.id','produit_couleurs.produits_id')
        // ->select('produits.id','produit_couleurs.produits_id',DB::raw('sum(produit_couleurs.quantite_produits) as sum'))
        // ->get();
        // return $produt;
        $vi = DB::table('types')
        ->orderBy('types.created_at','ASC')
        ->get();
        $produit= DB::table('produits')
        ->leftJoin('rayons', 'rayons.id', '=', 'produits.rayons_id')
        ->leftJoin('images', 'produits.id', '=', 'images.produits_id')
        ->leftJoin('stocks', 'rayons.stock_id', '=', 'stocks.id')
        ->leftJoin('univers', 'univers.id', '=', 'produits.univers_id')
        ->leftJoin('sous_types', 'sous_types.id', '=', 'produits.sous_types_id')
        ->leftJoin('types', 'types.id', '=', 'sous_types.types_id')
        ->where('images.type_image','p')
        ->select('rayons.libelle_rayon', 'stocks.libelle_stock','produits.*','sous_types.lsotype','univers.type_univer','types.libelle_type','images.src_image')
        ->get();

        // return $produit;

        return view('liste_produits',['typ'=>$typ,'stk'=>$stk,'uni'=>$uni,'prd'=>$produit,'clr'=>$clr]);
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

        $prd = new produit;
      //  rayon_pro produits_id rayons_id/produi

        $prd->discription_produit=$request->input("Description");
        $prd->prix_achat_produit=$request->input("Prix_achat");
        $prd->prix_vents_produit=$request->input("Prix_vente");
        $prd->nom_produit=$request->input("nom_p");
        $prd->univers_id=$request->input('univers_id');
        $prd->sous_types_id=$request->input('sous_types_id');
        $prd->rayons_id=$request->input('rayon');
        $prd->save();

        // produits_id
        // rayons_id
        $artic = produit::orderBy('produits.created_at','DESC')->first();

        $j=count($request->couleur);


        for($i=0;$i<$j;$i++){
            $quntite_p_c1=new produit_couleur;
            $quntite_p_c1->couleurs_id=$request->couleur[$i];
            $quntite_p_c1->quantite_produits=$request->couler_quantiter[$i];
            $quntite_p_c1->produits_id=$artic->id;
            $quntite_p_c1->save();
        }


        if($request->hasFile('img_p')){


              $file= $request->file('img_p');
              $src=$file->store('imag');

              $pth=explode('/', $src);
              $src=$file->storeAs('imag',$pth[1],'public');


              $image=new image;
              $image->src_image=$src;
              $image->type_image="p";
              $image->produits_id=$artic->id;
              $image->save();


        }

        if($request->hasFile('img')){
            foreach($request->img as $file){


              $src=$file->store('imag');

              $pth=explode('/', $src);
              $src=$file->storeAs('imag',$pth[1],'public');

              $image=new image;
              $image->src_image=$src;
              $image->type_image="s";
              $image->produits_id=$artic->id;
              $image->save();

            }
        }


     return redirect('produit');


    }

    /**
     * Display the specified resource.
     *
     * @param  \App\produit  $produit
     * @return \Illuminate\Http\Response
     */
    public function show(produit $produit)
    {
        $produits= DB::table('produits')
        ->leftJoin('images', 'produits.id', '=', 'images.produits_id')
        ->where('images.type_image','p')
        ->where('produits.id','=',$produit->id)
        ->select('produits.*','images.src_image')
        ->get();




        $imge=image::where('images.produits_id','=',$produit->id)->where('images.type_image','s')->get();
        $col=DB::table('produit_couleurs')
        ->leftJoin('couleurs', 'couleurs.id', '=', 'produit_couleurs.couleurs_id')
        ->leftJoin('produits', 'produits.id', '=', 'produit_couleurs.produits_id')
        ->where('produit_couleurs.produits_id','=',$produit->id)
        ->select('couleurs.*','produit_couleurs.quantite_produits')
        ->get();

       return view('site.detaille_produit',['produits'=>$produits,'imge'=>$imge,'col'=>$col]);

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\produit  $produit
     * @return \Illuminate\Http\Response
     */
    public function edit(produit $produit)
    {
        $typ=type::all();
        $stk=stock::all();
        $uni=univer::all();
        $prd=produit::find($produit->id);
        return view('modifier_produit',['typ'=>$typ,'stk'=>$stk,'uni'=>$uni,'prd'=>$prd]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\produit  $produit
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, produit $produit)
    {



        $prd=produit::find($produit->id);
        $prd->discription_produit=$request->input("Description");
        $prd->prix_achat_produit=$request->input("prix_achat_produit");
        $prd->prix_vents_produit=$request->input("pric_vents_produit");

        $prd->nom_produit=$request->input("nom_produit");
        $prd->univers_id=$request->input('univers');
        $prd->sous_types_id=$request->input('sous_types_id');
        $prd->rayons_id=$request->input('rayon');
        $prd->save();



         $artic = produit::orderBy('produits.created_at','DESC')->first();
        // $rayon_produit=produit_rayon::where('produits_id','=',$produit->id)->first();
        // $rayon_produit
        // $rayon_produit->save();


        if($request->hasFile('img_p')){



            //   $src=$img_p->store('imag');

            //   $pth=explode('/', $src);
            //   $src=input->img->storeAs('imag',$pth[1],'public');

            //   $image=new image;
            //   $image->src_image=$src;
            //   $image->type_image="p";
            //   $image->produits_id=$artic->id;
            //   $image->save();


        }

        if($request->hasFile('img')){
            foreach($request->img as $file){


              $src=$file->store('imag');

              $pth=explode('/', $src);
              $src=$file->storeAs('imag',$pth[1],'public');

              $image=new image;
              $image->src_image=$src;
              $image->type_image="s";
              $image->produits_id=$artic->id;
              $image->save();

            }
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\produit  $produit
     * @return \Illuminate\Http\Response
     */
    public function destroy(produit $produit)
    {
        return "destroy";
    }


    public function accueil()
    {
        $uni=univer::all();
        $uni=univer::all();

    }
}
