@extends('pagemaster.masteradmin')

@section('conte')


 <!-- Page Heading -->


          <!-- DataTales Example -->
          <div class="card shadow mb-4">
            <div class="card-header py-3">
              <h6 class="m-0 font-weight-bold text-primary">liste des tock</h6>
            </div>

            <div class="card-body">
            <a style="margin-left:180px;width:600px;" href="" class="btn btn-primary btn-icon-"  data-toggle="modal" data-target="#exampleModal" data-whatever="@fat">
                    <span class="icon text-white-50">
                      <i class=""></i>
                    </span>
                    <span class="text">ajouter  tock</span>
            </a>

<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel"> tock</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <form action="stock" method="post" enctype="multipart/form-data">
       {{csrf_field()}}
      <div class="modal-body">
          <div class="form-group">
            <label for="recipient-name" class="col-form-label">nom tock</label>
            <input type="text" class="form-control" id="recipient-name" name="libelle_stock">
          </div>
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
                     <th>tock</th>
                      <th style="margin-left:50px";  >Gestion</th>
                    </tr>
                  </thead>

                  <tbody>
                 @foreach($sto as $liststo)
                 <tr>
                      <td><a href="{{url('rayon/'.$liststo->id.'/liste')}}" >{{$liststo->libelle_stock}} {{$liststo->id}} </a></td>



                    <td style="margin-left:60px";>
                     <form action="{{url('stock/'.$liststo->id)}}" method='post'>
                     {{csrf_field()}}
                     {{method_field('DELETE')}}

                        <a  href="{{url('stock/'.$liststo->id.'/edit')}}"  class="btn btn-warning btn-circle btn-lg" >
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














@endsection
