<main class="form-signin w-100 m-auto">
	<form action="{{route('login')}}" method="post" >
		   @csrf
		<h1 class="fw-normal txt-white">Welcome</h1>
		<div class="form-floating">
			<input type="email" class="form-control" id="email" autocomplete="off" name="email" placeholder="Email">
			<label for="email">Email</label>
		</div>
		<div class="form-floating">
			<input type="password" class="form-control" id="password" autocomplete="off" name="password" placeholder="Password">
			<label for="password">Password</label>
		</div>
		<button class="btn btn-lg btn-primary" type="submit">Sign in</button>
		<button class="btn btn-lg btn-secondary" type="reset">Reset</button>
	</form>
</main>