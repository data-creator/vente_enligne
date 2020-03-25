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
            <h1 class="h4 text-gray-900 mb-4">Modofier sous type</h1>
          </div>
          <form class="user" action="{{url('soustype/')}}" method='post'>
            {{csrf_field()}}
            {{method_field('PUT')}}
            <div class="form-group row">

            <div class="col-sm-6 mb-3 mb-sm-0">
            <span style="margin-left:250px">type</span>
            <select class=" form-control" name="types_id">
            @foreach($typ as $listtp)
                <option value="{{$listtp->id}}">
                  {{$listtp->libelle_type}}
                </option>
            @endforeach
            </select>
              </div>

              <div class="col-sm-6 mb-3 mb-sm-0">
              <span style="margin-left:140px">nom du sous type</span>
               <input type="text" class="form-control" id="recipient-name" name="libeype" value="{{$sotp->id}}">
              </div>

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
