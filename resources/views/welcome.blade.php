@extends('layout')

@section('content')
    <div class="flex-center position-ref full-height">
        @if (Route::has('login'))
            <div class="top-right links">
                <a href="{{ url('/login') }}">Login</a>
                <a href="{{ url('/register') }}">Register</a>
            </div>
        @endif

        <div class="content">
            <h1 class="title m-b-md">
                Laravel
            </h1>

            <div class="links">
                <ul class="list-inline">
                    <li class="list-inline-item">
                        <a href="hello-world">Hello World</a>
                    </li> |
                    <li class="list-inline-item">
                        <a href="hello-controller">Hello Controller</a>
                    </li> |
                    <li class="list-inline-item">
                        <a href="about">About</a>
                    </li> |
                    <li class="list-inline-item">
                        <a href="cards">Cards</a>
                    </li>
                    {{-- <a href="https://laravel.com/docs">Documentation</a>
                    <a href="https://laracasts.com">Laracasts</a>
                    <a href="https://laravel-news.com">News</a>
                    <a href="https://forge.laravel.com">Forge</a>
                    <a href="https://github.com/laravel/laravel">GitHub</a> --}}
                </ul>
            </div>
        </div>
    </div>
@stop
