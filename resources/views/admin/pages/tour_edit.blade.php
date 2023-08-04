@include('admin.layout.header')

<main class="form-signin w-100 m-auto">
	<h2 class="text-center">Edit tour</h2>
	<form action="{{route('tour-update')}}" method="post">
		@csrf
		<input type="hidden" name="id" value="{{$tour_edit->id}}">
		<div class="form-floating mb-3">
		
			<input required type="text" class="form-control" id="tour_name" name="tour_name" placeholder="Tour Name" value="{{$tour_edit->tour_name}}">
			<label for="floatingInput">Tour Name</label>
		</div>
		<div class="form-floating mb-3">
			<input type="date" placeholder="DD MMMM, YYYY" data-date-format="DD MMMM, YYYY" onfocus="(this.type='date')" min="<?php 
			$datetime = new DateTime('tomorrow');
			echo $datetime->format('Y-m-d');?>" class="form-control" id="dep_date" name="dep_date" required  value="{{$tour_edit->dep_date}}">
			<label for="floatingPassword">Departure Date</label>
		</div>
		<div class="form-floating mb-3">
			<input type="text" required class="form-control" id="tour_code" name="tour_code" placeholder="Tour Code" value="{{$tour_edit->tour_code}}" >
			<label for="floatingInput">Tour Code</label>
		</div>
		<div class="form-floating mb-3">
			<select class="form-select form-select-lg mb-3" required id="tour_type" name="tour_type">
				<option value="{{NULL}}">Choose</option>
				@foreach($tour_types as $type)
				<option value="{{$type->id}}" {{ ( $type->id == $tour_edit->tour_type) ? 'selected' : '' }}>{{$type->tour_type}}</option>
				@endforeach
				
			</select>
			<label for="floatingInput">Tour Type</label>
		</div>
		<button class="btn btn-lg btn-success" type="submit">Update Tour</button>
	</form>
</main>

@include('admin.layout.footer')