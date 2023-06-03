@extends("templates.header")

@section("contenue")

  <div class="container d-flex">
      @isset($categories)
      <div class="d-flex justify-content-center flex-wrap">
        @foreach($categories  as $key => $cat)
        <div class="card m-2" style="width: 30rem;">
          <img class="card-img-top  img" src="{{asset($cat->photo)}}" alt="Card image cap">
          <div class="card-body">
            <h5 class="card-title">{{$cat->titre}}</h5>
            <form action="{{route("plats_categorie", $cat)}}">
              <button href="#" class="btn btn-primary">Découvrir les {{count($cat->plats)}} plats</button>
            </form>
          </div>
        </div>
        @endforeach
      <div class="row">

      @endisset
  </div>

@endsection