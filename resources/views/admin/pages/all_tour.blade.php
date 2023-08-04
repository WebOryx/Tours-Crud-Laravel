@include('admin.layout.header')
<h2 class="text-center">All Tours</h2>
<div class="row">
	<div class="col-1 fw-bolder text-center p-3 border border-end-0 border-primary">Sr.</div>
	<div class="col-2 fw-bolder text-center p-3 border border-end-0 border-primary">Name</div>
	<div class="col-2 fw-bolder text-center p-3 border border-end-0 border-primary">Depature Date</div>
	<div class="col-2 fw-bolder text-center p-3 border border-end-0 border-primary">Tour Code</div>
	<div class="col-2 fw-bolder text-center p-3 border border-end-0 border-primary">Tour Type</div>
	<div class="col-3 fw-bolder text-center p-3 border border-primary">Action</div>
</div>

<div class="row">
	@php
	$i=1;
	@endphp
       @foreach($tours as $tour)
		<div class="col-1 text-center p-3 border border-top-0 border-end-0 border-primary">{{$i++}}</div>
		<div class="col-2 text-center p-3 border border-top-0 border-end-0 border-primary">{{$tour->tour_name}}</div>
		<div class="col-2 text-center p-3 border border-top-0 border-end-0 border-primary">{{$tour->dep_date}}</div>
		<div class="col-2 text-center p-3 border border-top-0 border-end-0 border-primary">{{$tour->tour_code}}</div>
		<div class="col-2 text-center p-3 border border-top-0 border-end-0 border-primary">{{isset($tour->type)?$tour->type->tour_type:''}}</div>
		<div class="col-3 text-center p-3 border border-top-0 border-primary">
			<div class="btn-group" role="group" aria-label="Basic example">
				<a href="{{route('tour-edit',$tour->id)}}"  class="btn btn-success">Update</a>
				<a href="{{route('tour-delete',$tour->id)}}"  class="btn btn-danger">Delete</a>
			</div>
		</div>
		@endforeach
	
</div>
@include('admin.layout.footer')