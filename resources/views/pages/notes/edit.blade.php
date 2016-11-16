@extends('layout')

@section('header_top')
  @extends('header_top')
@stop

@section('content')
  <div class="row">
    <div class="col-md-6 col-md-offset-3">
      <h1 class="title m-b-md">
        {{ $note->title }}
      </h1>
      @if (!empty($content))
        <div class="lead">
          {{ $content }}
        </div>
      @endif
      <div class="content">
        <hr>
        <h3>Edit Note <em>{{ $note->id }}</em></h3>
        <form method="POST" action="/notes/{{ $note->id }}">
          {{ method_field('PATCH') }}
          <div class="form-group">
            <textarea name="body" class="form-control">{{ $note->body }}</textarea>
          </div>
          <div class="form-group">
            <button type="submit" class="btn btn-primary">Update Note</button>
          </div>
          {!! csrf_field() !!}
        </form>
      </div>
    </div>
  </div>
@stop

