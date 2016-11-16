@extends('layout')

@section('header_top')
  @extends('header_top')
@stop

@section('content')
  <div class="row">
    <div class="col-md-6 col-md-offset-3">
      <h1 class="title m-b-md">
        {{ $card->title }}
      </h1>
      <div class="lead">
        {{ $content }}
      </div>
      <div class="content">
        <h3>Your Card Notes goes here:</h3>
        <ul class="list-group">
          @foreach ($card->notes as $note)
            <li class="list-group-item">
              {{ $note->body }}
              <span class="pull-right">&nbsp;| <a href="/notes/{{ $note->id }}/edit">Edit</a>]</span>
              @unless (empty($note->user))
                <span class="pull-right">[<a href="#">{{ ucwords($note->user->name) }}</a></span>
              @endunless
            </li>
          @endforeach
        </ul>
        <hr>
        <h3>Add a New Note</h3>

        @unless (empty($errors->all()))
          <div class="has-error">
            <ul class="error">
              @foreach ($errors->all() as $error)
                <li class="form-control help-block">{{ $error }}</li>
              @endforeach
            </ul>
          </div>
        @endunless

        <form method="POST" action="/cards/{{ $card->id }}/notes">
          <div class="form-group">
            <textarea name="body" class="form-control">{{ @old('body') }}</textarea>
          </div>
          <div class="form-group">
            <button type="submit" class="btn btn-primary">Add Note</button>
          </div>
          {!! csrf_field() !!}
        </form>

        <pre> {{ var_dump($errors) }} </pre>
      </div>
    </div>
  </div>
@stop
