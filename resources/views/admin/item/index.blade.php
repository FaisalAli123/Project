@extends('admin.layout.admin')

@section('content')

<h2 style="margin-right:270px;">Items </h2><br /><br />

<ul style="margin-right;340px;">
  @forelse($items as $item)
  <li>
      <h4>Name Of Item:{{$item->name}}</h4>
      <form action="{{route('item.destroy',$item->id)}}" method="POST">
        {{csrf_field()}}
        {{method_field('DELETE')}}
        <input class="btn btn-default" type="submit" value="Delete" />
      </form>
  </li>
@empty
  <h3>No Items</h3>
@endforelse
</ul>
@endsection
