<!DOCTYPE html>
<html>
<head>
	<title></title>
	<style type="text/css">
		table {
		    border-collapse: collapse;
		    width: 70%;
		    margin: 0 auto;
		}
		th, td {
		    text-align: left;
		    padding: 8px;
		}

		tr:nth-child(even){background-color: #f2f2f2}

		th {
		    background-color: #4CAF50;
		    color: white;
		}
		.del{
			border: 1px solid ;
			text-align: center;
			width: 60%;
			background-color: red;
			border-radius: 3px;
			margin-bottom: 10px;
		}
		.del a{
			text-decoration: none;
			color: black;
			font-family: Rosewood Std Regular;
		}
		.edit{
			border: 1px solid ;
			text-align: center;
			width: 60%;
			background-color: darkblue;
			border-radius: 3px;
			margin-bottom: 10px;
		}
		.edit a{
			text-decoration: none;
			color: black;
			font-family: Rosewood Std Regular;
		}
		.dels a{
			text-decoration: none;
			color: white;
		}
	</style>
</head>
<body>

	<table>
		<tr>
	    	<th>ID</th>
	    	<th>Firstname</th>
	    	<th>Lastname</th>
	    	<th>Email</th>
	    	<th>Age</th>
	    	<th>
	    	<div class="dels">
	    		<a href="home"> Add </a>
	    	</div>
	    	</th>	
	  	</tr>
		@foreach($student as $students)
	  	<tr class="try">
			<td> {{ $students->id }}		</td>
			<td> {{ $students->first_name }}</td>
			<td> {{ $students->last_name }}	</td>
			<td> {{ $students->email }}		</td>
			<td> {{ $students->age }}		</td>
			<td id="botun"> 
				<div class="del">
					<a href="/delete/ {{ $students->id }}"> Delete </a>
				</div>	
				<div class="edit">
					<a href="/edit/ {{ $students->id }}"> Edit </a>
				</div>
			</td>
		</tr>
		@endforeach				
	</table>
</body>
</html>