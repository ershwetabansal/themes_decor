@extends('layouts.app')

@section('content')
    <div class="container content-container">
        <h2 class="title">
            {{ $service->name }}
        </h2>
        <section id="Carousel">
            @if($service->description)
                <div class="content">
                    {{ $service->description }}
                </div>
                <div class="content overlay">{{ $service->description }}</div>
            @endif
            @include('partials.carousel')
        </section>
    </div>
@endsection