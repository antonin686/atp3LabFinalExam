<!DOCTYPE html>
<html>
<head>
	<title>Home page</title>
</head>
<body>
	<h1>Add User</h1>
	<a href="/home">Back</a> | 
	<a href="/logout">logout</a>
	
	<form method="post" enctype="multipart/form-data">
		{{csrf_field()}}
	<table border="1">
		<tr>
			<td>USERNAME</td>
			<td><input type="text" name="username" value=""></td>
		</tr>
        <tr>
			<td>Name</td>
			<td><input type="text" name="name" value=""></td>
		</tr>
		
		<tr>
			<td>PASSWORD</td>
			<td><input type="password" name="password" value=""></td>
		</tr>
		
		<tr>
			<td><input type="submit" name="submit" value="Save"></td>
			<td></td>
		</tr>
	</table>
</form>


</body>
</html>
