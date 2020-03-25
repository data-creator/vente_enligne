<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>SB Admin 2 - Register</title>
  <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

  <!-- Custom fonts for this template-->
  <link href="{{asset('asset_admin/vendor/fontawesome-free/css/all.min.css')}}" rel="stylesheet" type="text/css">

  <!-- Custom styles for this template-->
  <link href="{{asset('asset_admin/css/sb-admin-2.min.css')}}" rel="stylesheet">
  <script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <script src="https://unpkg.com/gijgo@1.9.13/js/gijgo.min.js" type="text/javascript"></script>
    <link href="https://unpkg.com/gijgo@1.9.13/css/gijgo.min.css" rel="stylesheet" type="text/css" />

</head>

<body class="bg-gradient-primary">

  <div class="container">
  <form action="registration" method="post" enctype="multipart/form-data">
       {{csrf_field()}}
    <div class="card o-hidden border-0 shadow-lg my-5">
      <div class="card-body p-0">
        <!-- Nested Row within Card Body -->
        <div class="row">

          <div class="col-lg-12">
            <div class="p-5">
              <div class="text-center">
                <h1 class="h4 text-gray-900 mb-4">Create an Account!</h1>
              </div>
              <form class="user">
                <div class="form-group row">
                  <div class="col-sm-6 mb-3 mb-sm-0">
                    <input type="text" class="form-control " id="exampleFirstName" placeholder="First Name" name="nom">
                  </div>
                  <div class="col-sm-6">
                    <input type="text" class="form-control " id="exampleLastName" placeholder="Last Name" name="prenom">
                  </div>
                </div>
                <div class="form-group row">
                <div class="col-sm-6">
                    <input type="date"  class="form-control" name="date">
                </div>
                <div class="col-sm-6">
                  <input type="email" class="form-control " id="exampleInputEmail" placeholder="Email Address" name="email">
                  </div>
                </div>
                <div class="form-group row">
                  <div class="col-sm-6 mb-3 mb-sm-0">
                    <input type="password" class="form-control " id="exampleInputPassword" placeholder="Password" name="password">
                  </div>
                  <div class="col-sm-6">
                    <input type="password" class="form-control " id="exampleRepeatPassword" placeholder="Repeat Password">
                  </div>
                </div>

                <div class="form-group row">

                  <div class="col-sm-6">
                    <input  type="file"  class="form-control" name="file">
                  </div>
                  <div class="col-sm-6">
                  <select class=" form-control" name="code_groupe">
                            <option >


                          </option>

                       </select>

                  </div>
                  </div>
                <hr>

                <button type="submit"  class="btn btn-primary btn-user btn-block">Register Account</button>

              </form>
            </div>
          </div>
        </div>
      </div>
    </div>

  </div>
</form>
  <script>
        $('#datepicker').datepicker({
            uiLibrary: 'bootstrap4'
        });
    </script>
  <!-- Bootstrap core JavaScript-->
  <script src="{{asset('asset_admin/vendor/jquery/jquery.min.js')}}"></script>
  <script src="{{asset('asset_admin/vendor/bootstrap/js/bootstrap.bundle.min.js')}}"></script>

  <!-- Core plugin JavaScript-->
  <script src="{{asset('asset_admin/vendor/jquery-easing/jquery.easing.min.js')}}"></script>

  <!-- Custom scripts for all pages-->
  <script src="{{asset('asset_admin/js/sb-admin-2.min.js')}}"></script>

</body>

</html>
