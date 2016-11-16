@extends('layout')

@section('header_top')
  @extends('header_top')
@stop

@section('content')
  <div class="row">
    <div class="col-md-6 col-md-offset-3">
      <h1 class="title m-b-md">
        Edit Card
      </h1>
      <div>
        @unless (empty($errors->all()))
          <div class="has-error">
            <ul class="error">
              @foreach ($errors->all() as $error)
                <li class="form-control help-block">{{ $error }}</li>
              @endforeach
            </ul>
          </div>
        @endunless

        <form method="POST" action="/cards/{{ $card->id }}">
          {{ method_field('PATCH') }}
          <div class="form-group">
            <input type="text" name="title" class="form-control" value="{{ $card->title }}" />
          </div>

          <div class="form-group">
            <textarea name="body" class="form-control">{{ $card->body }}</textarea>
          </div>

          <div class="form-group">
            <button type="submit" class="btn btn-primary">Update Card</button>
            <a href="/cards" class="btn btn-primary">Cancel</a>
          </div>
          {{ csrf_field() }}
        </form>
      </div>
    </div>
  </div>
@stop
