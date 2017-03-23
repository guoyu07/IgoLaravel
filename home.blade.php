<!DOCTYPE html>
<html>
<head>
	<title>Diagram diary for all</title>
</head>
<body>
	<div id="tile">
		Diagram
	</div>
	<div id="welcome">
		<div class="cent">
			<h1>Welcome to Diagram</h1>
			<br>
			<p> Save you memories here </p>
			<div>
				<input type="text" name="user" placeholder="Phone, Email or Username">
				<br><br>
				<input type="password" name="password" placeholder="password">
				<button>Log in</button>
			</div>
			<form method="POST" action="/reg">
			{{ csrf_field() }}
			<div>
				<p> New to Diagram ? Sign up</p>
				<input type="text" name="full_name" placeholder="Full Name"><br>
				<input type="text" name="email" placeholder="Email"><br>
				<input type="text" name="user_name" placeholder="Username"><br>
				<input type="password" name="pass" placeholder="Password">
				<button>Sign up for Diagram</button>
			</div>
			</form>
		</div>
	</div>
	<br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
	<hr>
	<footer>IGOWIZIEE</footer>
</body>
</html>