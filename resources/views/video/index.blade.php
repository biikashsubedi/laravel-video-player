@extends('video.layouts.master')
@section('content')

        <div class="embed-responsive embed-responsive-16by9">
        <iframe class="embed-responsive-item" src="{{ $link ?? '' }}" allowfullscreen></iframe>
    </div>


@endsection
