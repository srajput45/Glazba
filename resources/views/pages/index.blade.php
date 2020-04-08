@extends('layouts.app')

@section('content')

<div class="col">
    
    @if(count($images) > 0)
    <h5 class="category-heading">NEW RELEASE</h5>
    <div class="category-view-row"> 
        @foreach ($images['new release'] as $item)
        <div class="category-view-col">
            <a href="/musicplayer"><img src= "images/new release/{{$item}}"  alt="Snow" style="margin-left: 5px; height: 250px ; width:180px"></a>
        </div>
        @endforeach
    </div>
    <h5 class="category-heading">POP</h5>
    <div class="category-view-row"> 
        @foreach ($images['pop'] as $item)
        <div class="category-view-col">
            <a href="#"><img src= "images/pop/{{$item}}"  alt="Snow" style="margin-left: 5px; height: 250px ; width:180px"></a>
        </div>
        @endforeach
    </div>
    <h5 class="category-heading">HINDI SONGS</h5>
    <div class="category-view-row"> 
        @foreach ($images['hindi song'] as $item)
        <div class="category-view-col">
            <a href="#"><img src= "images/hindi song/{{$item}}"  alt="Snow" style="margin-left: 5px; height: 250px ; width:180px"></a>
        </div>
        @endforeach
    </div>
    <h5 class="category-heading">TOP HITS</h5>
    <div class="category-view-row"> 
        @foreach ($images['top hits'] as $item)
        <div class="category-view-col">
            <a href="#"><img src= "images/top hits/{{$item}}"  alt="Snow" style="margin-left: 5px; height: 250px ; width:180px"></a>
        </div>
        @endforeach
    </div>
    <h5 class="category-heading">PUNJABI SONGS</h5>
    <div class="category-view-row"> 
        @foreach ($images['punjabi'] as $item)
        <div class="category-view-col">
            <a href="#"><img src= "images/punjabi/{{$item}}"  alt="Snow" style="margin-left: 5px; height: 250px ; width:180px"></a>
        </div>
        @endforeach
    </div>
    <h5 class="category-heading">LOVED SONGS</h5>
    <div class="category-view-row"> 
        @foreach ($images['loved song'] as $item)
        <div class="category-view-col">
            <a href="#"><img src= "images/loved song/{{$item}}"  alt="Snow" style="margin-left: 5px; height: 250px ; width:180px"></a>
        </div>
        @endforeach
    </div>
    @else
        <h3>No posts found</h3>
    @endif
</div>
@include('layouts.footer');
@endsection
