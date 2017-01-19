@extends('admin.layout.admin')

@section('content')
<div class="navbar">
  <a class="navbar-brand" href="#">Platforms</a>
  <ul class="nav navbar-nav">
  @if(!empty($platforms))
    @forelse ($platforms as $platform)
      <li>
        <a href="#">{{$platform->name}}</a>
      </li>
    @empty
    <li>
      No Data
    </li>
    @endforelse
  @endif
  </ul>

  <a class="btn btn-primary" data-toggle="modal" href="#platform">Add Platform</a>
  <div class="modal fade" id="platform">
    <div class="modal-dialog">

      {!! Form::open(['route' => 'platform.store', 'method' => 'post']) !!}

      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
          <h4 class="modal-title">Add Platform</h4>
        </div>
        <div class="modal-body">
          <div class="form-group">
            {{ Form::label('name', 'Name') }}
            {{ Form::text('name', null, array('class' => 'form-control'))}}
          </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
          <button type="submit" class="btn btn-primary">Save Changes</button>
        </div>
        {!! Form::close() !!}
      </div>
    </div>
  </div>

</div>


@endif
@endsection
