<!DOCTYPE html>
<html>
<head>
	<title>Home page</title>
</head>
<body>
	<h1>Welcome Home! {{session('name')}}</h1>

	<a href="{{route('student.add')}}">Add user</a> | 
	<a href="{{route('student.index')}}">Student List</a> | 
	<a href="/logout">logout</a>

	
</body>
</html>