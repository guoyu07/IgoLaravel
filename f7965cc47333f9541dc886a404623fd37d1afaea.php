<!DOCTYPE html>
<html>
<head>
	<title>Registration Form</title>
</head>
<body>
	<center>
		<form method="POST" action="/save">
		<?php echo e(csrf_field()); ?>

			<div id="form">
				<div class="reg">
					<center>
					Registration Form
					</center>
				</div>
					<div class="name">
						<p>First Name</p>
						<input type="text" name="fname" placeholder="First Name">
					</div> 
					<div class="lname">
						<p>Last Name</p>
						<input type="text" name="lname" placeholder="Last Name">
					</div>	
					<div class="email">
						<p>Email</p>
						<input type="email" name="email" placeholder="Email">
					</div>
					<div class="age">
						<p>Age</p>
						<input type="number" name="age" placeholder="Age">
					</div>
					<div class="sign">
						<button>SIGN UP</button>
					</div>
					<hr>
		</form>	
		</div>
					<div class="signs">
						<a href="list"><button>Show List</button></a>
					</div>

	</center>	

</body>
	<style type="text/css">
		body{
			background: #C0C0C0;
		}
		#form{
			margin-top: 50pt;
			border: 1px;
			border-radius: 5px;
			height: 400pt;
			width: 340pt;
			background: black;
			overflow: hidden;
		}
		.reg{
			font-family: Calibri;
			background: #696969;
			font-weight: bold;
			height: 35pt;
			font-size: 20pt;
			padding-top: 10pt;
			border-top-left-radius: 5px;
			border-top-right-radius: 5px;
		}
		.name p{
			color: white;
			font-family: Perpetua;
			font-size: 16pt;
			margin-bottom: 3pt;
			margin-top: 10pt;
			text-align: center;
		}
		.name input{
			border-radius: 4pt;
			height: 23pt;
			font-family: Perpetua;
			width: 90%;
			color: white;
			font-size: 13pt;
			text-align: center;
			background-color: #696969;
		}	
		.lname p{
			color: white;
			font-family: Perpetua;
			font-size: 16pt;
			margin-bottom: 3pt;
			margin-top: 10pt;
			text-align: center;
		}
		.lname input{
			border-radius: 4pt;
			height: 23pt;
			font-family: Perpetua;
			width: 90%;
			color: white;
			font-size: 13pt;
			text-align: center;
			background-color: #696969;
		}
		.email p{
			color: white;
			font-family: Perpetua;
			font-size: 16pt;
			margin-bottom: 3pt;
			margin-top: 10pt;
			text-align: center;
		}
		.email input{
			border-radius: 4pt;
			height: 23pt;
			font-family: Perpetua;
			width: 90%;
			color: white;
			font-size: 13pt;
			text-align: center;
			background-color: #696969;
		}
		.age p{
			color: white;
			font-family: Perpetua;
			font-size: 16pt;
			margin-bottom: 3pt;
			margin-top: 10pt;
			text-align: center;
		}
		.age input{
			border-radius: 4pt;
			height: 23pt;
			font-family: Perpetua;
			width: 90%;
			color: white;
			font-size: 13pt;
			text-align: center;
			background-color: #696969;
		}
		.sign button{
			height: 23pt;
			width: 60pt;
			border-radius: 3pt;
			font-family: Batang;
			font-size: 10pt;
			background-color: #00BFFF;
			color: white;
			margin-top: 20pt;
			font-weight: bolder;
		}
		hr{
			width: 80%;
			margin-top: 30pt;
		}
		.signs button{
			height: 33pt;
			width: 100pt;
			border-radius: 3pt;
			font-family: Batang;
			font-size: 10pt;
			background-color: #00BFFF;
			color: white;
			margin-top: 20pt;
			font-weight: bolder;
		}

	</style>
</html>