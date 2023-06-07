@extends("templates.header")


@section("contenue")

@isset($categorie)
  <div class="card bg-dark text-white mb-3 mx-auto" style="max-width: calc(100% - 10%);">
    <img src="{{asset($categorie->photo)}}" class="card-img" alt="{{$categorie->titre}}" style="max-height: 250px;">
    <div class="card-img-overlay">
      <h5 class="card-title">{{$categorie->titre}}</h5>
      <p class="card-text">{{count($plats)}} plats</p>
    </div>
  </div>
@endisset



@isset($plats)
  @forelse ($plats as $plat)
  <div class="card mb-3 mx-auto" style="max-width: calc(100% - 10%); max-height : 200px; ">
    <div class="row no-gutters">
      <div class="col-md-3">
        <img src="{{asset($plat->getPhoto())}}" class="categorieBg card-img w-100 ml-0" alt="{{$plat->intitule}} " >
      </div>
      <div class="col-md-7">
        <div class="card-body">
          <h5 class="card-title">{{$plat->intitule}}</h5>
          <p class="card-text fw-bold" style="color :rgba(96, 96, 248, 0.877)">{{$plat->prix}} Dhs</p>
          <p class="card-text"><b>description :</b> {{$plat->description}}</p>
          
          <p class="card-text"><b>compositions :</b> @foreach ($plat->composants as $composant)
            @if(!$loop->last){{$composant->libelle}}, @else {{$composant->libelle}} 
            @endif 
          @endforeach</p>
          
        </div>
        <div>

        </div>
      </div>

      <div class="col-md-2">
        @php
              $star =$plat->nombreCommandes() 
        @endphp
        @switch($star)
          @case($star < 4)  
            <i class="fa fa-star" style="color:gold"></i>
          @case($star < 20)
            <i class="fa fa-star" style="color:gold"></i>
          @case($star <= 50)
            <i class="fa fa-star" style="color:gold"></i>
          @case($star <= 100)
            <i class="fa fa-star" style="color:gold"></i>
          @case($star > 100)
            <i class="fa fa-star" style="color:gold"></i>
          @default
            <i class="fa fa-star" style="color:gold"></i>
        @endswitch
        ({{$star}})
      </div>
    </div>
  </div>
  @empty
      <div class="container">
        NO DATA :(
      </div>
  @endforelse
@endisset


@endsection