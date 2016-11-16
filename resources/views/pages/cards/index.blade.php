@extends('layout')

@section('header_top')
  @extends('header_top')
@stop

@section('content')
  <div class="row">
    <div class="col-md-6 col-md-offset-3">
      <h1 class="title m-b-md">
        All Cards
      </h1>
      <div>
        {{-- <a href="cards/add" class="btn btn-xs btn-primary">Add Card</a> --}}
        <div class="lead">{{ $content }}</div>
        <div>
          <ul class="list-group">
            @foreach ($cards as $card)
              <li class="list-group-item">
                <a href="/cards/{{ $card->id }}">{{ $card->title }}</a>
                <div class="pull-right">[
                  <a href="/cards/{{ $card->id }}/edit">Edit</a>
                ]</div>
              </li>
            @endforeach
          </ul>
        </div>

        <hr>

        <h3>Add a New Card</h3>

        @unless (empty($errors->all()))
          <div class="has-error">
            <ul class="error">
              @foreach ($errors->all() as $error)
                <li class="form-control help-block">{{ $error }}</li>
              @endforeach
            </ul>
          </div>
        @endunless

        <form method="POST" action="cards/add">
          {!! csrf_field() !!}
          <div class="form-group">
            {{-- <textarea name="title" class="form-control">{{ old('title') }}</textarea> --}}
            <input type="text" name="title" class="form-control" value="{{ old('title') }}" placeholder="Card Name" />
          </div>

          <div class="form-group">
            <textarea name="body" class="form-control" placeholder="Card Description">{{ old('body') }}</textarea>
          </div>

          <div class="form-group">
            <button type="submit" class="btn btn-primary">Add Card</button>
          </div>
        </form>
      </div>
    </div>
  </div>
@stop
