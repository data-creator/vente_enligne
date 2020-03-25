@extends('pagemaster.masteradmin')



@section('conte')



 <!-- Page Heading -->


          <!-- DataTales Example -->
          <div class="card shadow mb-4">
            <div class="card-header py-3">
              <h6 class="m-0 font-weight-bold text-primary">liste des produits </h6>
            </div>

            <div class="card-body">
            <a style="margin-left:260px;width:600px;" href="" class="btn btn-primary btn-icon-"  data-toggle="modal" data-target="#exampleModal" data-whatever="@fat">
                <span class="icon text-white-50">
                    <i class=""></i>
                </span>
                <span class="text">Ajouter un produits</span>
            </a>




 <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Produits</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <form action="{{url('produit')}}" method="post" enctype="multipart/form-data">
      <div class="modal-body">

        {{csrf_field()}}
          <div class="form-group">
            <label for="recipient-name" class="col-form-label">nom produit</label>
            <input type="text" class="form-control" name="nom_p" id="recipient-name">
          </div>
          <div class="form-group">
          <span style="margin-left:00px">type</span>
            <select class=" form-control type" name="type" data-dependent="sous_types_id">
                    @foreach($typ as $type)
                            <option value="{{$type->id}}">
                              {{$type->libelle_type}}
                          </option>
                    @endforeach
            </select>

           <br>

          <span style="margin-left:00px">sous type</span>
            <select class="form-control  sous_types_id" name="sous_types_id" disabled>
              <option value="" >chose type </option>


           </select>
          </div>

          <div class="form-group">
           <span style="margin-left:0px">Univer</span>
            <select class=" form-control" name="univers_id">
                  @foreach($uni as $un)
                            <option value="{{$un->id}}">
                            {{$un->type_univer}}
                          </option>
                  @endforeach
                       </select>
          </div>



           <div class="form-group">
           <span style="margin-left:0px">stock</span>
            <select class=" form-control stock_store" name="stock" data-dependent="rayon">
                            @foreach($stk as $sk)
                            <option value="{{$sk->id}}">
                            {{$sk->libelle_stock}}
                            </option>
                            @endforeach

                       </select>
             <br>

           <span style="margin-left:0px">rayon</span>
            <select class=" form-control rayon_store" name="rayon" disabled>


            </select>
          </div>
          <div id="inp">
          <div class="form-group">
          <select class=" form-control" name="couleur[]">
                    @foreach($clr as $cl)
                            <option value="{{$cl->id}}">
                                 {{$cl->nom_couleur }}
                            </option>
                    @endforeach
                       </select>

          <label for="recipient-name" class="col-form-label">quantite</label>

            <input type="text" class="form-control" name="couler_quantiter[]" id="recipient-name">
            <br>
         </div>

         </div>
         <input type="button" value="ok" id="add">







          <div class="form-group">
            <label for="recipient-name" class="col-form-label">Prix achat</label>
            <input type="text" class="form-control" id="recipient-name" name="Prix_achat">
          </div>


          <div class="form-group">
            <label for="recipient-name" class="col-form-label">Prix vente</label>
            <input type="text" class="form-control" id="recipient-name" name="Prix_vente">
          </div>

          <div class="form-group">
          <label for="message-text" class="col-form-label">Description</label>
            <textarea class="form-control" id="message-text" name="Description"></textarea>
            </div>










      </div>
           <div >
            <label  class="col-form-label">l image prinsipale</label>
            <input type="file" name="img_p" >
            </div>
            <div >
            <label  class="col-form-label">autres images</label>
            <input type="file" name="img[]" multiple>
            </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary">enregister</button>
      </div>
      </form>
    </div>
  </div>
</div>












              <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                  <thead>
                    <tr>
                     <th>Nom Produit</th>

                      <th>type</th>
                      <th>sous_type</th>
                      <th>stock</th>
                      <th>rayon</th>
                      <th>sexe</th>
                      <th>Prix achat</th>
                      <th>Prix vente</th>


                      <th>Gestion</th>
                    </tr>
                  </thead>

                  <tbody>
                   @foreach($prd as $listprd)
                    <tr>
                      <td><a data-toggle="modal" data-target="#nom{{$listprd->id}}">{{$listprd->nom_produit}}</a>

                    <div class="modal fade bd-example-modal-lg" id="nom{{$listprd->id}}" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
                    <div class="modal-dialog modal-lg">
                        <div class="modal-content">
                        <img src="{{asset('storage/'.$listprd->src_image)}}" class="rounded mx-auto d-block d-block w-100" >

                        </div>
                    </div>
                    </div>

                      </td>

                      <td>{{$listprd->libelle_type}}</td>
                      <td>{{$listprd->lsotype}}</td>
                      <td>{{$listprd->libelle_stock}}</td>
                      <td>{{$listprd->libelle_rayon}}</td>
                      <td>{{$listprd->type_univer}}</td>
                      <td>{{$listprd->prix_achat_produit }}</td>
                      <td>{{$listprd->prix_vents_produit}}</td>

                        <td >
                        <form action="{{url('produit/'.$listprd->id)}}" method='post'>
                     {{csrf_field()}}
                     {{method_field('DELETE')}}

                        <a  href="{{url('produit/'.$listprd->id.'/edit')}}"  class="btn btn-warning btn-circle btn-lg" >
                        <i class="fas fa-exclamation-triangle"></i>
                        </a>
                        <button type="submit" class="btn btn-danger btn-circle btn-lg">
                          <i class="fas fa-trash"></i>
                        </button>

                     </form>
                       </td>
                    </tr>
                  @endforeach






                  </tbody>
                </table>
              </div>
            </div>
          </div>

        </div>
        <!-- /.container-fluid -->

      </div>
      <!-- End of Main Content -->

      <!-- Footer -->

      <!-- End of Footer -->

    </div>
    <!-- End of Content Wrapper -->

  </div>
  <!-- End of Page Wrapper -->


  <script src="https://code.jquery.com/jquery-3.4.1.js"
			  integrity="sha256-WpOohJOqMqqyKL9FccASB9O0KwACQJpFTUBLTYOVvVU="
			  crossorigin="anonymous"></script>

<script>
 $(document).ready(function(){

     $('#add').click(function(){
        var opt='';
         $.ajax({
            type:'get',
            url:'{!!URL::to('listecol')!!}',

            success:function(data){
                console.log(data);
                for(var i=0;i<data.length;i++){
                    opt+='<option value="'+data[i].id+'">'+data[i].nom_couleur+'</option>';

                }
                $('#inp').append('<select class=" form-control" name="couleur[]">'+opt+'</select><input type="text" class="form-control" name="couler_quantiter[]" id="recipient-name">');
         }



     });
    });
     $('.type').change(function(){
        var type_id=$(this).val();
        var opt='';
        var div=$(this).parent();

        $.ajax({
            type:'get',
            url:'{!!URL::to('listetype')!!}',
            data:{'id':type_id},
            success:function(data){
                opt+=' <option value="-1" selected disabled>chose suos typ</option>';
                for(var i=0;i<data.length;i++){
                    opt+='<option value="'+data[i].id+'">'+data[i].lsotype+'</option>';

                }
                $('.sous_types_id').prop('disabled', false);
                div.find(".sous_types_id").html("");
                div.find(".sous_types_id").append(opt);
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

