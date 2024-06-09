@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <nav id="sub-nav">
                <ul>
                    @foreach ($galleries as $gallery)
                        <li><a href="{{ route('gotoIllustrationsByGallery', [$gallery->id]) }}" @if ($currGalleryID == $gallery->id) class="active" @endif>{{ $gallery->name }}</a></li>
                    @endforeach
                </ul>
            </nav>
        </div>
    </div>
    <div class="row">
        <div class="col-md-12">
            <div class="gallery">
                @foreach ($images as $image)
                    <div class="tint">
                        <a href="{{ $image->image }}" data-lightbox="gallery-{{ $currGalleryID }}" data-title="{{ $image->caption }}">
                            {{ HTML::image($image->image, $image->caption, array('title' => $image->title, 'class' => 'gallery-image')) }}
                        </a>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
</div>
@endsection
