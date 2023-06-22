@extends("templates.dashboardServeur")

@section("style")
  <style>
    .imgCat{
      width: 100px;
      height: 100px;
      border-radius: 10px
    }
    a{
      text-decoration: none;
      color: black;
      font-size: 15px;
      font-family: poppins;

    }
  </style>
@endsection

@section("contenue")
  @isset($categories)
  <div class="container d-flex justify-content-around mt-5">
    @foreach($categories as $cat)
        <a href="" class="d-flex flex-column text-center">
          <img src="{{asset($cat->photo)}}" alt="{{$cat->titre}}" class="imgCat">
        {{$cat->titre}}
        </a>
    @endforeach
  </div>
  @endisset
@endsection