@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="row">
                <div class="col-md-6 col-md-offset-3">
                    <img id="homeImg" alt="Lorna Bunnie" title="Lorna Bunnie" src="{{ asset('images/home-image.png') }}" />
                </div>
            </div>
            <div id="homeContent" class="row">
                <div id="showreel-video" class="col-md-12">
                    {!! $video->getPlayer(100, 100) !!}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
