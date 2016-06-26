<!-- extending code from resources/views/layouts/masterpage.blade.php page-->
@extends('layouts.masterpage')
@section('title', 'Home page')
<!-- content section -->
@section('content') 
    <!-- Hotel banner image -->
	
    <img src="image/hotel4.jpg" alt="Hotel banner image" width="100%" height="400">
		 
    <!-- /Hotel banner image -->
    <!-- All hotel lists container-->
    <div class="container marketing" style="margin-top: 70px;">
            <!--  hotel list row-->
            <div class="row">
                @if(empty($hotels))
                    <h3>No Result found</h3>
                @else
                    @foreach ($hotels as $hotel)
                      <div class="col-lg-4"><!-- col-lg-4 -->
                            @if($hotel->hotelImage == '')
                                <img class="img-square" 
                                src="image/no-hotel-image-icon.jpg"
                                alt="No hotel image" width="140" height="140">
                            @else
                               <img class="img-square" 
                                src="hotelimage/thumbnail/{{$hotel->hotelImage}}"
                                alt="Hotel icon image" width="140" height="140">
                            @endif
                            <h2>{{ $hotel->hotelName }}</h2><!-- /hotel name -->
                            <p>Price : {{ $hotel->hotelPrice }}</p><!-- /hotel price -->
                            <p>{!! link_to_route('hoteldetail.show', 'View details >>', [$hotel->id] , ['class'=>'btn btn-default']) !!}</p>
                      </div><!-- /.col-lg-4 -->
                    @endforeach
                @endif
            </div><!-- / hotel list row -->
    </div>
    <!-- /All hotel lists container-->    
@endsection
<!-- /content section -->