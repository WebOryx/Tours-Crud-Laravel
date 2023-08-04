@include('admin.layout.header')

<main class="form-signin w-100 m-auto">
	<h2 class="text-center">Add new tour</h2>
	<form action="{{route('tour-save')}}" method="post">
		@csrf
		<div class="form-floating mb-3">
		
			<input required type="text" class="form-control" id="tour_name" name="tour_name" placeholder="Tour Name">
			<label for="floatingInput">Tour Name</label>
		</div>
		<div class="form-floating mb-3">
			<input type="date" placeholder="DD MMMM, YYYY" data-date-format="DD MMMM, YYYY" onfocus="(this.type='date')" min="<?php 
			$datetime = new DateTime('tomorrow');
			echo $datetime->format('Y-m-d');?>" class="form-control" id="dep_date" name="dep_date" required >
			<label for="floatingPassword">Departure Date</label>
		</div>
		<div class="form-floating mb-3">
			<input type="text" required class="form-control" id="tour_code" name="tour_code" placeholder="Tour Code" >
			<label for="floatingInput">Tour Code</label>
		</div>
		<div class="form-floating mb-3">
			<select class="form-select form-select-lg mb-3" required id="tour_type" name="tour_type">
				<option value="{{NULL}}">Choose</option>
				@foreach($tour_types as $type)
				<option value="{{$type->id}}">{{$type->tour_type}}</option>
				@endforeach
				
			</select>
			<label for="floatingInput">Tour Type</label>
		</div>
		<button class="btn btn-lg btn-success" type="submit">Save Tour</button>
	</form>
</main>

@include('admin.layout.footer')