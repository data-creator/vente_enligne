@extends('pagemaster.masteradmin')

@section('conte')


<div class="container">

<div class="card o-hidden border-0 shadow-lg my-5">
  <div class="card-body p-0">
    <!-- Nested Row within Card Body -->
    <div class="row">

      <div class="col-lg-12">
        <div class="p-5">
          <div class="text-center">
            <h1 class="h4 text-gray-900 mb-4">Modifier  commande</h1>
          </div>
          <form class="user">
            <div class="form-group row">


              <div class="col-sm-6 mb-3 mb-sm-0">
              <span>Email client</span>
            <input type="email" class="form-control" id="recipient-name">
              </div>

              <div class="col-sm-6 mb-3 mb-sm-0">
              <span class="" style="margin-left:px;width: 450px;margin-left:0px; ">type</span>
              <select class=" form-control" name="code_groupe">
                            <option >
                              
                          
                          </option>
                         
                       </select>
              </div>


              <div class="col-sm-6 mb-3 mb-sm-0">
              <span class="" style="margin-left:px;width: 450px;margin-left:0px; ">sous type</span>
              <select class=" form-control" name="code_groupe">
                            <option >
                              
                          
                          </option>
                         
                       </select>
              </div>

              <div class="col-sm-6 mb-3 mb-sm-0">
              <span class="" style="margin-left:px;width: 450px;margin-left:0px; ">Produit</span>
              <select class=" form-control" name="code_groupe">
                            <option >
                              
                          
                          </option>
                         
                       </select>
              </div>












              <div class="col-sm-6 mb-3 mb-sm-0">
              <span class="" style="margin-left:px;width: 450px;margin-left:180px ">quantiter de produit</span>
              <input type="number" class="form-control " id="" placeholder="">
              </div>

              <div class="col-sm-6 mb-3 mb-sm-0">
             
              </div>

              
              </div>
            <a href="login.html" class="btn btn-primary btn-user btn-block">
             Enregistrer
            </a>
            <hr>

          </form>
          <hr>
         
        </div>
      </div>
    </div>
  </div>
</div>

</div>














@endsection