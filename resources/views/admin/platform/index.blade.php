@extends('admin.layout.admin')

@section('content')
<!-- Start Navigation -->
<div class="navbar">
  <a class="navbar-brand" href="#">Platforms</a>
  <ul class="nav navbar-nav">
  @if(!empty($platforms))
    @forelse ($platforms as $platform)
      <li>
        <a href="{{route('platform.show',$platform->id)}}">{{$platform->name}}</a>
      </li>
<!-- If Empty Display 'No Data' -->
    @empty
    <li>
      No Data
    </li>
    @endforelse
  @endif
  </ul>
<!-- Start Platform Section -->
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
<!-- End Platform Section -->
</div>
@if(!empty($items))
<!-- Start Table Section -->
  <section>
    <h3>Items</h3>
    <table class="table table-hover">
      <thead>
        <tr>
          <th>Items</th>
        </tr>
      </thead>
      <tbody>
        @forelse($items as $item)
        <tr>
          <td>{{$item->name}}</td><!-- Show Game Name Related To Its Platform -->
        </tr>
      @empty
        <tr><td>
          No Data
        </td></tr>
      @endforelse
      </tbody>
    </table>
  </section>
<!-- End Table Section -->
@endif
@endsection
