@include('admin.layout.header')
<h2 class="text-center">All Tour Types</h2>
<div class="row">
	<div class="col-4 fw-bolder text-center p-3 border border-end-0 border-primary">Sr.</div>
	<div class="col-4 fw-bolder text-center p-3 border border-end-0 border-primary">Tour Type</div>
	<div class="col-4 fw-bolder text-center p-3 border border-primary">Action</div>
</div>


<div class="row">
	  	 @php
	     $i=1;
	     @endphp
	     @foreach($tour_types as $type)
	  
		<div class="col-4 text-center p-3 border border-top-0 border-end-0 border-primary">{{$i++}}</div>
		<div class="col-4 text-center p-3 border border-top-0 border-end-0 border-primary">{{$type->tour_type}}</div>
		<div class="col-4 text-center p-3 border border-top-0 border-primary">
			<div class="btn-group" role="group" aria-label="Basic example">
				<a href="{{route('tour-type-edit',$type->id)}}"  class="btn btn-success">Update</a>
				<a href="{{route('tour-type-delete',$type->id)}}" class="btn btn-danger">Delete</a>
			</div>
		</div>
		@endforeach
	
</div>
@include('admin.layout.footer')