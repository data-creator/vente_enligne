@extends('pagemaster.masteradmin')

@section('conte')
@extends('pagemaster.masteradmin')

@section('conte')


 <!-- Page Heading -->
 

          <!-- DataTales Example -->
          <div class="card shadow mb-4">
            <div class="card-header py-3">
              <h6 class="m-0 font-weight-bold text-primary">liste des produits </h6>
            </div>

            <div class="card-body">
            <a style="margin-left:180px;width:600px;" href="" class="btn btn-primary btn-icon-"  data-toggle="modal" data-target="#exampleModal" data-whatever="@fat">
                    <span class="icon text-white-50">
                      <i class=""></i>
                    </span>
                    <span class="text">Ajouter un client</span>
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
      <div class="modal-body">
        <form>
          <div class="form-group">
          <input type="text" class="form-control " id="exampleFirstName"  placeholder="Nom ">
          </div>

          <div class="form-group">
          <input type="text" class="form-control " id="exampleFirstName"  placeholder="Prenom ">

          </div>

          <div class="form-group">
          <input type="mail" class="form-control " id="exampleInputEmail" placeholder="email">

          </div>

          <div class="form-group">
          <input type="password" class="form-control " id="exampleLastName" placeholder="password">

          </div>


          <div class="form-group">
          <span style="margin-left:0px">Date de naissance</span>
          <input type="date" class="form-control " id="exampleInputPassword" placeholder="date de naissance">

          </div>

    
          <div class="form-group">
          <span style="margin-left:0px">la ville</span>
            <select class=" form-control" name="">
                            <option value="14">
                              
                            
                          </option>
                         
                       </select>
          </div>



          <div class="form-group">
          <span style="margin-left:0px">le pays</span>
            <select class=" form-control" name="">
                            <option value="14">
                              
                            
                          </option>
                         
                       </select>
          </div>


          <div class="form-group">
          <span style="margin-left:0px">photo</span>
          <input type="file" class="form-control " id="exampleInputPassword" placeholder="image">

          </div>
         
         

          

        </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">enregister</button>
      </div>
    </div>
  </div>
</div>









                  

              <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                  <thead>
                    <tr>
                    
                     <th>Nom client</th>
                      <th> Prenom</th>
                      <th>Email</th>
                      <th>password</th>
                      <th>date de naissance</th>
                      <th>ville</th>
                      <th>pays</th>
                      <th>gestion</th>
                    </tr>
                  </thead>
                  
                  <tbody>

                    <tr>
                    <td>Tiger Nixon</td>
                     
                      <td>System Architect</td>
                      <td>System Architect</td>
                      <td>System Architect</td>
                      <td>System Architect</td>
                      <td>System Architect</td>
                      <td>System Architect</td>
                        <td ><a href="#" class="btn btn-warning btn-circle btn-lg" data-toggle="modal" data-target="#exampleModal" data-whatever="@fat">
                    <i class="fas fa-exclamation-triangle"></i>
                  </a>


                  <a href="#" class="btn btn-danger btn-circle btn-lg">
                    <i class="fas fa-trash"></i>
                  </a>
 
                 
                         
                        
                    </tr>
                   

                    
                 
                    
                   
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
















@endsection