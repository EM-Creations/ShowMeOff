@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="row">
                <div class="col-md-6 col-md-offset-3 centre">
                    <img title="Contact" alt="Contact" src="{{ asset('images/contact-image.png') }}" />
                </div>
            </div>
            <div class="row topPad">
                <div class="col-md-6 col-md-offset-3 centre">
                    <h1>Email</h1>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6 col-md-offset-3 centre">
                    <a href="mailto:{{ $email }}">{{ $email }}</a>
                </div>
            </div>
            <div class="row topPad">
                <div class="col-md-6 col-md-offset-3 centre">
                    <h1>CV</h1>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6 col-md-offset-3 centre">
                    <a href="{{ asset('files/Lorna_Bunnie_CV.pdf') }}" target="_blank"><img title="CV Pack" alt="CV Pack" src="{{ asset('images/cv-image.png') }}" /></a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
