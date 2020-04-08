@extends('layouts.app')

@section('content')

<div class="col">
    <h5 class="category-heading">Bollywood</h5>
    @if(count($images) > 0)
    <div class="category-view-row"> 
        @foreach ($images['bollywood'] as $item)
        <div class="category-view-col">
            <a href="/musicplayer"><img src= "images/bollywood/{{$item}}"  alt="Snow" style="margin-left: 5px; height: 250px ; width:180px"></a>
        </div>
        @endforeach
    </div>

    <div class="category-view-row"> 
        @foreach ($images['bollywood'] as $item)
        <div class="category-view-col">
            <a href="#"><img src= "images/bollywood/{{$item}}"  alt="Snow" style="margin-left: 5px; height: 250px ; width:180px"></a>
        </div>
        @endforeach
    </div>
    @else
        <h3>No posts found</h3>
    @endif
</div>
@include('layouts.footer');
@endsection
