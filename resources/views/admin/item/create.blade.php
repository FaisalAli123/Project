@extends('admin.layout.admin')

@section('content')

<h2 style="margin-right:270px;">Add Item </h2><br /><br />

<div class="row" style="margin-right:340px;" >

  <div class="col-md-8 col-md-offset-3">

  {!! Form::open(['route' => 'item.store', 'method' => 'post', 'files' => true]) !!}

      <div class="form-group">
        {{ Form::label('name', 'Name') }}
        {{ Form::text('name', null, array('class' => 'form-control')) }}
      </div>

      <div class="form-group">
        {{ Form::label('price', 'Price') }}
        {{ Form::text('price', null, array('class' => 'form-control')) }}
      </div>

      <div class="form-group">
        {{ Form::label('edition', 'Edition') }}
        {{ Form::select('edition', ['gameoftheyearedition' => 'Game Of The Year Edition', 'deluxeedition' => 'Deluxe Edition', 'hardenededition' => 'Hardened Edition'], null, ['class' => 'form-control']) }}
      </div>

      <div class="form-group">
        {{ Form::label('platform_id', 'Platform') }}
        {{ Form::select('platform_id', $platforms, null, ['class' => 'form-control', 'placeholder'=>'Select Platform']) }}
      </div>

      <div class="form-group">
        {{ Form::label('description', 'Description') }}
        {{ Form::text('description', null, array('class' => 'form-control')) }}
      </div>

      <div class="form-group">
        {{ Form::label('image', 'Image') }}
        {{ Form::file('image', array('class' => 'form-control')) }}
      </div>

      {{ Form::submit('Create', array('class' => 'btn btn-default')) }}
  {!! Form::close() !!}
</div>
</div>
<br /><br />
@endsection
