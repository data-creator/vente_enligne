@extends('pagemaster.masteradmin')

@section('conte')



<div class="container">

<div class="card o-hidden border-0 shadow-lg my-5">
  <div class="card-body p-0">
    <div class="row">
      <div class="col-lg-12">
        <div class="p-5">
          <div class="text-center">
            <h1 class="h4 text-gray-900 mb-4">Modifier ville</h1>
          </div>
          <form class="user" action="{{url('ville/'.$vl->id)}}" method='post'>
            {{csrf_field()}}
            {{method_field('PUT')}}
            <div class="form-group row">
            <div class="col-sm-6 mb-3 mb-sm-0">
            <span style="margin-left:250px">pays</span>

            <select class=" form-control" name="pays_id">
            @foreach($pay as $listp)
            @if($listp->id==$vl->pays_id)
              <option value={{$listp->id}} selcted >
              {{$listp->nom_pays}}
              </option>
              @else
              <option value={{$listp->id}}  >
              {{$listp->nom_pays}}
              </option>
              @endif
            @endforeach

            </select>
              </div>

              <div class="col-sm-6 mb-3 mb-sm-0">
              <span style="margin-left:140px">nom de ville</span>
                <input type="text" class="form-control " id="exampleFirstName" name="nom_ville"  placeholder="ville" value="{{$vl->nom_ville}}">
              </div>

            </div>

            <hr>

            <button type="submit"  class="btn btn-primary btn-user btn-block">
              Enregister
            </button>


          </form>
          <hr>

        </div>
      </div>
    </div>
  </div>
</div>

</div>














@endsection
