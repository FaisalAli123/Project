@extends('admin.layout.admin')

@section('content')
<!-- display all items in admin/item page -->
<h2 style="margin-left:160px;">Items </h2><br /><br />

<ul style="margin-left:100px;">
  @forelse($items as $item)

      <h4 style="margin-left; 200px;">Name Of Item:{{$item->name}}</h4>
      <h5>
        £{{$item->price}}
      </h5>
      <img style="width:300px; height:170px; margin-left:415px;" class="img-responsive img-portfolio img-hover" src="{{url('images',$item->image)}}" alt="">
      <form action="{{route('item.edit',$item->id)}}">
        {{csrf_field()}}
        <input class="btn btn-default" type="submit" value="Edit" />
      </form><br />
      <form action="{{route('item.destroy',$item->id)}}" method="POST">
        {{csrf_field()}}
        {{method_field('DELETE')}}
        <input class="btn btn-default" type="submit" value="Delete" />
      </form><br />

<!-- End Display-->
<!-- If no games in database dislay 'no items' -->
@empty
  <h3>No Items</h3>
@endforelse
</ul>
@endsection
