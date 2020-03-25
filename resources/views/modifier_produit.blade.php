@extends('pagemaster.masteradmin')

@section('conte')



<div class="container">

<div class="card o-hidden border-0 shadow-lg my-5">
  <div class="card-body p-0">
    <div class="row">
      <div class="col-lg-12">
        <div class="p-5">
          <div class="text-center">
            <h1 class="h4 text-gray-900 mb-4">Modifier ville</h1>
          </div>
          <form class="user" action="{{url('produit/'.$prd->id)}}" method='post'>
            {{csrf_field()}}
            {{method_field('PUT')}}
            <div class="form-group row">
            <div class="col-sm-6 mb-3 mb-sm-0">
            <span >nom_produit s</span>
            <input type="text" class="form-control " id="exampleFirstName" name="nom_produit"   value="{{$prd->nom_produit}}">

              </div>

              <div class="col-sm-6 mb-3 mb-sm-0">
              <span >type_categ_produit</span>
               <select name="type_categ_produit" class="form-control ">
               <option value="">select cat</option>
               <option value="vetement-et-accessoire">vetement-et-accessoire</option>
               <option value="beauté-et-santé">beauté-et-santé</option>
               <option value="decoration">decoration</option>
               </select>
              </div>

            </div>
            <div class="form-group row">
            <div class="col-sm-6 mb-3 mb-sm-0">
            <span >prix_achat_produit </span>
            <input type="number" class="form-control " id="exampleFirstName" name="prix_achat_produit" value="{{$prd->prix_achat_produit}}"  >

              </div>

              <div class="col-sm-6 mb-3 mb-sm-0">
              <span >pric_vents_produit </span>
                <input type="number" class="form-control " id="exampleFirstName" name="pric_vents_produit"   value="{{$prd->pric_vents_produit}}">
              </div>

            </div>

            <div class="form-group row">
            <div class="col-sm-6 mb-3 mb-sm-0">
            <span >type</span>
             <select name=""  class="form-control  " id="type">
             @foreach($typ as $listyp)
             <option value="{{$listyp->id}}">{{$listyp->libelle_type}}</option>
             @endforeach
             </select>
             </div>
             <div class="col-sm-6 mb-3 mb-sm-0">
              <span >sous types</span>

              <select name="sous_types_id" class="form-control" id="sous_types_id_lo">
             </select>
              </div>
              </div>

            </div>
            <div class="form-group row">
            <div class="col-sm-6 mb-3 mb-sm-0">
            <span >stock</span>
            <select name=""  class="form-control stock_store " >
            @foreach($stk as $liststk)
            <option value="{{$liststk->id}}">{{$liststk->libelle_stock}}</option>
            @endforeach
             </select>


              <span >rayon</span>
              <select name="rayon"  class="form-control rayon_store ">
             </select>
              </div>

            </div>
            <div class="form-group row">


              <div class="col-sm-6 mb-3 mb-sm-0">
              <span >univers</span>
              <select name="univers"  class="form-control ">
              @foreach($uni as $listuni)
              <option value="{{$listuni->id}}">{{$listuni->type_univer}}</option>
              @endforeach
             </select>
              </div>

            </div>

            <div class="form-group row">
            <div class="col-sm-12 mb-6 mb-sm-0">
            <textarea name="Description"  class="form-control " >{{$prd->discription_produit}}</textarea>
            </div>
            <div >
            <label  class="col-form-label">l image prinsipale</label>
            <input type="file" name="img_p" >
            </div>
            <div >
            <label  class="col-form-label">autres images</label>
            <input type="file" name="img[]" multiple  style="margine-left:80px;">
            </div>

            <hr>

            <button type="submit"  class="btn btn-primary btn-user btn-block">
              Enregister
            </button>


          </form>
          <hr>

        </div>
      </div>
    </div>
  </div>
</div>

</div>
<?php header('Access-Control-Allow-Origin: *'); ?>
<script src="https://code.jquery.com/jquery-3.4.1.js"
			  integrity="sha256-WpOohJOqMqqyKL9FccASB9O0KwACQJpFTUBLTYOVvVU="
			  crossorigin="anonymous"></script>

<script>
 $(document).ready(function(){
     $('#type').change(function(){
        var type_id=$(this).val();
        var opt='';
        var div=$(this).parent();

        $.ajax({
            type:'get',
            url:'{!!URL::to('listetype')!!}',
            data:{'id':type_id},
            success:function(data){
                opt+=' <option value="-1" selected disabled>chose sous type </option>';
                for(var i=0;i<data.length;i++){
                    opt+='<option value="'+data[i].id+'">'+data[i].lsotype+'</option>';

                }

               $("#sous_types_id_lo").html("");
                $("#sous_types_id_lo").append(opt);
                console.log(opt);

            },
        });

         });

         $('.stock_store').change(function(){
        var stock_id=$(this).val();
        var opt='';
        var div=$(this).parent();

        $.ajax({
            type:'get',
            url:'{!!URL::to('listerayon')!!}',
            data:{'id':stock_id},
            success:function(data){
                opt+=' <option value="-1" selected disabled>chose suos typ</option>';
                for(var i=0;i<data.length;i++){
                    opt+='<option value="'+data[i].id+'">'+data[i].libelle_rayon+'</option>';

                }
                $('.rayon_store').prop('disabled', false);
                div.find(".rayon_store").html("");
                div.find(".rayon_store").append(opt);
                console.log(opt);

            },
        });

         });

   });


</script>















@endsection
