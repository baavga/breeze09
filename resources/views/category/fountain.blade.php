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
<head>
    <title>Усан ориглуур</title>
</head>
  <!-- Page Content -->  
            {{-- Product loop --}} 
            <h3 style="font-">Усан ориглуур</h3>
            @if(count($products)>0)
            <div class="row">
                @foreach($products as $product)
              <div class="col-lg-4 col-md-6 mb-4">
                <div class="card h-100">
                  <div class="image">
                    <a href="/барилгын-материал/{{$product->id}}"><img class="card-img-top" style='height:200px;' src="storage/{{$product->image1}}" alt=""></a> 
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
            <script>
                $(function() {
                  
                  $("h2")
                      .wrapInner("<span>")
              
                  $("h2 br")
                      .before("<span class='spacer'>")
                      .after("<span class='spacer'>");
              
              });
              </script>
            @endif
            

            {{-- end product loop --}}

      <!-- /.container -->
  
@endsection