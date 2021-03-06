@extends('layout.super')

@section('content')
<style> 
    .image { 
     position: relative;  
  }
  
  h2 { 
     position: absolute; 
     top: 100px; 
     left: 0; 
     width: 100%; 
  }
  h2 span { 
     color: white; 
     font: bold 24px/45px Helvetica, Sans-Serif; 
     letter-spacing: -1px;  
     background: rgb(0, 0, 0); /* fallback color */
     background: rgba(0, 0, 0, 0.7);
     padding: 10px; 
  }
  h2 span.spacer {
     padding:0 0px;
  }
  
</style>
  <!-- Page Content --> 
  {{-- Carousel --}}
            <div id="carouselExampleIndicators" class="carousel slide my-4" data-ride="carousel">
              <ol class="carousel-indicators">
                <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
              </ol>
              <div class="carousel-inner" role="listbox">
                <div class="carousel-item active">
                  <img class="d-block img-fluid" src = {{asset("storage/slider/1.jpg")}} alt="First slide" style="object-fit: cover;height:400px; width:100%;">
                </div>
                <div class="carousel-item">
                    <img class="d-block img-fluid cropped" src = {{asset("storage/slider/3.jpg")}} alt="Second slide" style=" object-fit: cover;
                    width: 100%;
                    height: 400px;">
                </div>
                <div class="carousel-item">
                    <img class="d-block img-fluid" src = {{asset("storage/slider/2.jpg")}} alt="Third slide" style="object-fit: cover;height:400px; width:100%;">
                </div>
              </div>
              <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
              </a>
              <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
              </a>
            </div>
            {{-- end carousel --}}

            {{-- Product loop --}} 
            <h3><img style="width:35px" src="/storage/icons/poke.png" alt=""> Бүх бараа</h3>
            @if(count($products)>0)
            <div class="row">
                @foreach($products as $product)
              <div class="col-lg-4 col-md-6 mb-4">
                <div class="card ">
                  <div class="image">
                    <a href="/барилгын-материал/{{$product->id}}"><img class="card-img-top" style='height:200px;' src="/storage/{{$product->image1}}" alt=""></a> 
                   <a href="/барилгын-материал/{{$product->id}}"><h2><span>{{$product->price}}₮<span class='spacer'> </h2></a>
                  </div>
                  <div class="card-body">
                    <h4 class="card-title">
                    <a style = " text-decoration: none;"href="/барилгын-материал/{{$product->id}}">{{$product->name}}</a> 
                    </h4> 
                    <p class="card-text">{!!$product->shortdesc!!}</p>
                  </div> 
                </div>
              </div>
            @endforeach 
            </div>
            <div class="row" style="margin-left:0px; ">
              {{$products->links("pagination::bootstrap-4")}}  
            </div> 
            @endif
            
 
@endsection
