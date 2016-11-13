@extends('layouts.app')

@section('content')
<div class="container content-container">
    <h2 class="title">
        {{ $theme->name }} THEME
    </h2>
    <section id="Carousel">
        @if($theme->description)
            <div class="content">
                {{ $theme->description }}
            </div>
            <div class="content overlay">{{ $theme->description }}</div>
        @endif
        @include('partials.carousel')
    </section>
</div>
@endsection