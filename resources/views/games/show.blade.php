@extends ('layouts.app')

@section('content')
  <div class="row">
    <div class="col-md-6 col-md-offset-3">

  <h1>{{ $game->title }}</h1>

<ul class="list-group">
  @foreach ($game->notes as $note)
    <li class="list-group-item">
{{ $note->body }}
<a href="#" class="pull-right"> {{ $note->user->name }}</a>
</li>
  @endforeach
</ul>

<h3>Add Review</h3>

<form method="POST" action="/games/{{ $game->id }}/notes">

{{ csrf_field() }}

  <div class="form-group">
    <textarea name="body" class="form-control">{{ old('body') }}</textarea>
  </div>

  <div class="form-group">
    <button type="submit" class="btn btn-primary">Add Review</button>
  </div>

</form>
@if (count($errors))

@foreach ($errors->all() as $error)

  <li>
    {{ $error}}
  </li>
@endforeach
@endif
</div>
</div>
@stop
