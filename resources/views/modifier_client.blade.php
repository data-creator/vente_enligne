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
            <h1 class="h4 text-gray-900 mb-4">Modifier Client</h1>
          </div>
          <form class="user">
            <div class="form-group row">
              <div class="col-sm-6 mb-3 mb-sm-0">
                <input type="text" class="form-control " id="exampleFirstName"  placeholder="Nom ">
              </div>
              <div class="col-sm-6">
                <input type="text" class="form-control " id="exampleLastName" placeholder="Prenom ">
              </div>
            </div>
            <div class="form-group row">
              <div class="col-sm-6 mb-3 mb-sm-0">
                <input type="mail" class="form-control " id="exampleInputEmail" placeholder="email">
              </div>
              <div class="col-sm-6">
                <input type="password" class="form-control " id="exampleLastName" placeholder="password">
              </div>
            </div>
            <div class="form-group row">
              <div class="col-sm-6 mb-3 mb-sm-0">
                <input type="date" class="form-control " id="exampleInputPassword" placeholder="date de naissance">
              </div>
               <div class="col-sm-6 mb-3 mb-sm-0">
                <input type="file" class="form-control " id="exampleInputPassword" placeholder="image">
              </div>

            </div>

            <div class="form-group row">
            <span style="margin-left:490px">la ville</span>
            <select class=" form-control" name="">
                            <option value="14">
                              
                            
                          </option>
                         
                       </select>

            </div>
            <div class="form-group row">
            <span style="margin-left:490px">le pays</span>
            <select class=" form-control" name="">
                            <option value="14">
                              
                            
                          </option>
                         
                       </select>

            </div>


            
            <a href="login.html" class="btn btn-primary btn-user btn-block">
              Enregister
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