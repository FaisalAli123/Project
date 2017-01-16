@extends ('layouts.app')
@section ('content')

<h1>Edit Review</h1>


<form method="POST" action="/notes/{{ $note->id }}">
{{ method_field('PATCH') }}
{{ csrf_field() }}

  <div class="form-group">
    <textarea name="body" class="form-control">{{ $note->body }}</textarea>
  </div>

  <div class="form-group">
    <button type="submit" class="btn btn-primary">Update Review</button>
  </div>

</form>

@stop
