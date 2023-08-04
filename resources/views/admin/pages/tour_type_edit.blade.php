@include('admin.layout.header')
<main class="form-signin w-100 m-auto">
	<form action="{{route('tour-type-update')}}" method="Post">
		@csrf
		<input type="hidden" name="id" value="{{$tour_types_edit->id}}">
		<h2 class="text-center">Edit Tour Type</h2>
		<div class="form-floating mb-3">
			
			<input required type="text" class="form-control" id="tour_type" name="tour_type" placeholder="Tour Type" value="{{$tour_types_edit->tour_type}}">
			<label for="floatingInput">Tour Type</label>
		</div>
		<button class="btn btn-lg btn-primary" type="submit">Save</button>
		<button class="btn btn-lg btn-secondary" type="reset">Reset</button>
	</form>
</main>

@include('admin.layout.footer')