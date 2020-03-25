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
            <h1 class="h4 text-gray-900 mb-4" ></h1>
          </div>
          <form class="user" action="{{url('type/'.$typ->id)}}" method='post'>
            {{csrf_field()}}
            {{method_field('PUT')}}
            <div class="form-group row">


              <div class="col-sm-6 mb-3 mb-sm-0" style="margin-left:240px";>
              <span style="margin-left:200px">nom de type</span>
                <input type="text" class="form-control " id="exampleFirstName"  placeholder="Type" value="{{$typ->libelle_type}}" name="libelle_type">
              </div>

            </div>



            <button type='submit' class="btn btn-primary btn-user btn-block">
              Enregister
            </button>
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
