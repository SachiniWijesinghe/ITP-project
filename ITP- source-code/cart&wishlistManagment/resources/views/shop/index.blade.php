@extends('layouts.master')
@section('title')
    Super Fashion
@endsection


@section('content')


        <br>
    <div class="row">
{{--@foreach($productChunk as $product)--}}
        @foreach($product as $productChunk )
            <div class="col-sm-6 col-md-3">
                <div class="img-thumbnail" >
                    <img
                        src="{{$productChunk->imagePath}}"  class="img-fluid" alt="responsive image" >
                    <div class="caption">
                        <a class="itemName" href=""  target="_blank"><h6>{{$productChunk->title}}</h6></a>
                        <div class="clearfix">
                            <div class="pull-left price">LKR {{$productChunk->price}}</div>
                            <a href="/addToCart/{{$productChunk->id}}" class="btn btn-dark pull-right" role="button">Add To Cart</a></p>
                        </div>

                    </div>
                </div>
            </div>

        @endforeach


    </div>
{{--    @endforeach--}}
@endsection



