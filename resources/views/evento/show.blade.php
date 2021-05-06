@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row">
        <video id="my-video" class="video-js" controls preload="auto" style="width: 100%;height: 60vh;" data-setup="{}">
                   <source src="{{asset('assets/video/'.$evento->video)}}" type='video/mp4' >
        </video>
    </div>
</div>             
@endsection
