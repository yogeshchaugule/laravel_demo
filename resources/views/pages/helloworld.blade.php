@extends('layout')

@section('header_top')
  @extends('header_top')
@stop

@section('content')
  <div class="flex-center position-ref full-height">
    <!-- @if (Route::has('login'))
      <div class="top-right links">
        <a href="{{ url('/login') }}">Login</a>
        <a href="{{ url('/register') }}">Register</a>
      </div>
    @endif -->
    <div class="content">
      <h1 class="title m-b-md">
        {{ $title }}
      </h1>
      @unless (empty($content))
        <div class="lead">
          {{ $content }}
        </div>
      @endunless
      <div>
        @if (!empty($authors))
          <ins>This is developed by : <mark>{{ @implode(', ', $authors) }}</mark></ins>
        @else
          <del>Waiting for developers to provide names.</del>
        @endif
      </div>
    </div>
  </div>
@stop
