@extends('layouts.app')

@section('content')
    
    <div class="content-container content-page text-center">
    	<h2 class="title">
	        {{ $page->title }}
	    </h2>

        <div class="content">
            {!! $page->content !!}
        </div>
    </div>
@endsection
