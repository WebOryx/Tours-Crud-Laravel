@include('admin.layout.header')
<main class="form-signin w-100 m-auto">

	 @if (count($errors) > 0)
         <div class = "alert alert-danger">
            <ul>
               @foreach ($errors->all() as $error)
                  <li>{{ $error }}</li>
               @endforeach
            </ul>
         </div>
      @endif
	<h2 class="text-center">Edit user</h2>
	
	<form action="{{route('user-update')}}" method="post">
		@csrf
		<input type="hidden" name="id" class="form-control" value="{{$user_edit->id}}">
		<div class="form-floating mb-3">
			<input  type="text" class="form-control" value="{{$user_edit->user_name}}" id="username" name="username" placeholder="Username" >
			<label for="floatingInput">Username</label>
		</div>
		<div class="form-floating mb-3">
			<input  type="password" placeholder="
			" class="form-control" id="password" name="password" >
			<label for="password">Password</label>
		</div>
		<div class="form-floating mb-3">
			<input  type="email" class="form-control" value="{{$user_edit->email}}" id="email" name="email" placeholder="abc@xyz.com" >
			<label for="email">Email</label>
		</div>
		<div class="form-floating mb-3">
			<input  type="text" class="form-control" value="{{$user_edit->name}}" id="name" name="name" placeholder="Name" >
			<label for="name">Name</label>
		</div>
		<div class="form-floating mb-3">
			<select  class="form-select form-select-lg mb-3" id="status" name="status">
				
					<option>Select User Status</option>
					<option value = "1" {{old('status',$user_edit->status)=="1"? 'selected':''}}>Published</option>
					<option value = "0" {{old('status',$user_edit->status)=="0"? 'selected':''}}>Unpublished</option>
				
			</select>
			<label for="status">User Status</label>
		</div>
		<button class="btn btn-lg btn-success" type="submit">Save</button>
	</form>
</main>
@include('admin.layout.footer')