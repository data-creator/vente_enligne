@extends('pagemaster.masteradmin')

@section('conte')


 <!-- Page Heading -->


          <!-- DataTales Example -->
          <div class="card shadow mb-4">
            <div class="card-header py-3">
              <h6 class="m-0 font-weight-bold text-primary">liste des sous type</h6>
            </div>

            <div class="card-body">
            <a style="margin-left:180px;width:600px;" href="" class="btn btn-primary btn-icon-"  data-toggle="modal" data-target="#exampleModal" data-whatever="@fat">
                    <span class="icon text-white-50">
                      <i class=""></i>
                    </span>
                    <span class="text">ajouter sous type</span>
                  </a>

  <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel"></h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>

      <form action="{{url('soustype')}}" method="post" enctype="multipart/form-data">
      <div class="modal-body">
        {{csrf_field()}}


        <div class="form-group">
          <span style="margin-left:0px">type</span>
          <select class=" form-control type" name="types_id">
            @foreach($typ as $listtyp)
                            <option value="{{$listtyp->id}}" >
                            {{$listtyp->libelle_type}}
                          </option>
            @endforeach
            </select>
          </div>

          <div class="form-group">
            <label for="recipient-name" class="col-form-label">nom sous type</label>
            <input type="text" class="form-control" id="recipient-name" name="libelstp">
          </div>

          <hr>
    </div>
          <input type="file" name="src_stp">
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
                     <th>type</th>
                      <th>sous type</th>
                      <th>img</th>
                      <th style="margin-left:50px;width:140px";  >Gestion</th>
                    </tr>
                  </thead>

                  <tbody>

                  @foreach($stp as $listp)
                 <tr>
                 <td>{{$listp->libelle_type}}</td>
                     <td>{{$listp->lsotype}}</td>
                     <td><img src="{{asset('storage/'.$listp->src_image)}}" class="rounded mx-auto d-block"  style="height:66px;width:76px;"></td>

                   <td style="margin-left:60px;width:140px";>
                   <form action="{{url('soustype/'.$listp->id)}}" method='post'>
                                {{csrf_field()}}
                                {{method_field('DELETE')}}

                                <a  href="{{url('soustype/'.$listp->id.'/edit')}}"  class="btn btn-warning btn-circle btn-lg" >
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
     $('.type').change(function(){
        var type_id=$(this).val();
        var opt='';
        var div=$(this).parent();
        console.log("ok");

        $.ajax({
            type:'get',
            url:'{!!URL::to('listetype')!!}',
            data:{'id':type_id},
            success:function(data){
                console.log(data);
                opt+=' <option value="-1" selected disabled>chose suos typ</option>';
                for(var i=0;i<data.length;i++){
                    opt+='<option value="'+data[i].id+'">'+data[i].lsotype+'</option>';
                    console.log(i);
                }
                console.log(opt);


            },
        });

         });

   });


</script>













@endsection
