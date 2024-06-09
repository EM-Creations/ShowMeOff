@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="row">
                <div class="col-md-6 col-md-offset-3">
                    <img id="aboutImg" alt="About Lorna" title="About Lorna" src="{{ asset('images/about-image.png') }}" />
                </div>
            </div>
            <div id="aboutContent" class="row">
                <div id="about" class="col-md-6 col-md-offset-3">
                    {!! $about !!}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
