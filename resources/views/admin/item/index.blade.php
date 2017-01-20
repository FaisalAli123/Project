@extends('admin.layout.admin')
    
@section('content')

<h2 style="margin-left:160px;">Items </h2><br /><br />

<ul style="margin-left:100px;">
  @forelse($items as $item)
  <li>
      <h4 style="margin-left; 200px;">Name Of Item:{{$item->name}}</h4>
      <h5>
        £{{$item->price}}
      </h5>
      <img style="width:300px; height:170px;" class="img-responsive img-portfolio img-hover" src="{{url('images',$item->image)}}" alt="">
      <form action="{{route('item.edit',$item->id)}}">
        {{csrf_field()}}
        <input class="btn btn-default" type="submit" value="Edit" />
      </form>
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
