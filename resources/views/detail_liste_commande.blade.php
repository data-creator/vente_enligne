@extends('pagemaster.masteradmin')

@section('conte')


 <!-- Page Heading -->
 

          <!-- DataTales Example -->
          <div class="card shadow mb-4">
            <div class="card-header py-3">
              <h6 class="m-0 font-weight-bold text-primary">liste des commande Example</h6>
            </div>

            <div class="card-body">
            <a style="margin-left:180px;width:600px;" href="" class="btn btn-primary btn-icon-"  data-toggle="modal" data-target="#exampleModal" data-whatever="@fat">
                    <span class="icon text-white-50">
                      <i class=""></i>
                    </span>
                    <span class="text">ajouter une commande</span>
                  </a>







<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">commande</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form>
          <div class="form-group">
            <label for="recipient-name" class="col-form-label">Email de client</label>
            <input type="email" class="form-control" id="recipient-name">
          </div>

          <div class="form-group">
          <span class="" style="margin-left:px;width: 450px;margin-left:0px; ">type</span>
              <select class=" form-control" name="code_groupe">
                            <option >
                              
                          
                          </option>
                         
                       </select>
          </div>

          <div class="form-group">
          <span class="" style="margin-left:px;width: 450px;margin-left:0px; ">sous type</span>
              <select class=" form-control" name="code_groupe">
                            <option >
                              
                          
                          </option>
                         
                       </select>
          </div>

          <div class="form-group">
          <span class="" style="margin-left:px;width: 450px;margin-left:0px; ">Produits</span>
              <select class=" form-control" name="code_groupe">
                            <option >
                              
                          
                          </option>
                         
                       </select>
          </div>

          <div class="form-group">
          <label for="recipient-name" class="col-form-label">Quantiter</label>
            <input type="number" class="form-control" id="recipient-name">
          </div>

         

        </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Send message</button>
      </div>
    </div>
  </div>
</div>







              <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                  <thead>
                    <tr>
                     <th>Nom client</th>
                      <th>Date comannde</th>
                      <th>Produits</th>
                      <th>categorie produit</th>
                      <th>Type</th>
                      <th>sous_type</th>
                      <th>image prod</th>
                      
                    
                    </tr>
                  </thead>
                  
                  <tbody>


                   

                   


                    <tr>
                      <td>Tiger Nixon</td>
                      <td>System Architect</td>
                      <td>Tiger </td>
                      <td>Tiger </td>
                      
                      <td>Tiger </td>
                      <td>Tiger </td>
                      <td>Tiger </td>
                   

                 
                         
                        
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