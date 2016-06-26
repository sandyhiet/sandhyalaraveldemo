<!-- extending code from resources/views/layouts/masterpage.blade.php page-->
@extends('layouts.masterpage')
@section('title', 'Hotel Details')
<!-- content section -->
@section('content') 
  <div class="container">
        <div class="row pagecommon">
            <div class="col-md-8 col-md-offset-2">
                <div class="wrapper">
                    <div class="product_main">
                        <div class="product">
                            <div class="inner">
                                <div class="col-md-4">
                                    <div class="item_comments_header">
                                        <h2><span class="label label-default center-block">{{ $hotelname->hotelName }}</span></h3>
                                    </div>
                                    @if($hotelname->hotelImage=='')
                                        <img class="img-square" 
                                        src="{{asset('/image/no-hotel-image-icon.jpg')}}"
                                        alt="No hotel image" width="200" height="200">
                                    @else
                                        <img class="img-square" 
                                        src="{{asset('/hotelimage/thumbnail/')}}/{{$hotelname->hotelImage}}"
                                        alt="Hotel icon image" width="200" height="200">
                                    @endif
                                </div>
                                <div class="col-md-8">
                                    <div class="item_comment_form">
                                        <?php $count = 0;?>
                                        <!--display all comments -->
                                        @foreach ($comments as $comment)
                                            <!--count all comments -->
                                            <?php $count++;?>
                                            <div class="bs-example" data-example-id="simple-alerts"> 
                                                <div class="alert alert-success" role="alert">
                                                    {{ $comment->description }}
                                                </div>
                                            </div>
                                        @endforeach
                                        <!--display number of comments -->
                                        <h2 class="comment_count">{{$count}} Comments</h2>
                                        <!--Auth user post the comment -->
                                        @if (Auth::check())
                                             
                                            <br/>
                                            {!! Form::open(array('url' => 'postComments', 'method' => 'post')) !!}
                                            {!! form::textarea('body', null, ['class' => 'form-control']) !!}
                                            <br/>
                                            {!! Form::Submit('Post Comment', ['class' => 'btn btn-primary form-control']) !!}
                                            {!! Form::hidden('hotel_id', $hotelid) !!}
                                            {!! Form::close() !!}
                                            <br/>
                                        @else
                                            <!--login link -->
                                            <p>Please click here <a href = "{{ url('/login') }}">Login</a> to post a comments.</p>
                                        @endif
                                    </div>
                                </div>                                
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
  </div>
<!-- /content section -->
@endsection