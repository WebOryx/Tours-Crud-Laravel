@include('admin.layout.header')
<h2 class="text-center">All Users</h2>

<div class="row">
	<div class="col-1 fw-bolder text-center p-3 border border-end-0 border-primary">Sr.</div>
	<div class="col-3 fw-bolder text-center p-3 border border-end-0 border-primary">Username</div>
	<div class="col-3 fw-bolder text-center p-3 border border-end-0 border-primary">Email</div>
	<div class="col-2 fw-bolder text-center p-3 border border-end-0 border-primary">Status</div>
	<div class="col-3 fw-bolder text-center p-3 border border-primary">Action</div>
</div>


<div class="row">
	    @php 
	    $i=1;
	    @endphp
	    @foreach($user_list as $user)
		<div class="col-1 text-center p-3 border border-top-0 border-end-0 border-primary">{{$i++}}</div>
		<div class="col-3 text-center p-3 border border-top-0 border-end-0 border-primary">{{$user->user_name}}</div>
		
		<div class="col-3 text-center p-3 border border-top-0 border-end-0 border-primary">{{$user->email}}</div>
		<div class="col-2 text-center p-3 border border-top-0 border-end-0 border-primary">@if($user->status=="1")
			<img src="{{asset('images/published.png')}}">
		@elseif($user->status=="0")
			<img src="{{asset('images/unpublished.png')}}">
		@endif	
		</div>
		<div class="col-3 text-center p-3 border border-top-0 border-primary">
			<div class="btn-group" role="group" aria-label="Basic example">
				<a href="{{route('user-edit',$user->id)}}"  class="btn btn-success">Update</a>
				<a href="{{route('user-delete',$user->id)}}"  class="btn btn-danger">Delete</a>
			</div>
		</div>

		@endforeach
	
</div>
@include('admin.layout.footer')