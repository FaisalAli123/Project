@extends('admin.layout.admin')

@section('content')

<h2 style="margin-right:270px;">Items </h2><br /><br />

<ul style="margin-right;340px;">
  @forelse($items as $item)
  <li>
      <h4>Name Of Item:{{$item->name}}</h4>
  </li>
@empty
  <h3>No Items</h3>
@endforelse
</ul>
@endsection
