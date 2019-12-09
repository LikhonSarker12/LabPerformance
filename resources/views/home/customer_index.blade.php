<!DOCTYPE html>
<html>
<head>
	<title>Home page</title>
</head>
<body>
	<h1>Welcome Home! {{session('name')}}</h1>

	<a href="{{route('employee.add')}}">Profile</a> | 
	<a href="{{route('employee.show')}}">Medicines</a> | 
	<a href="/logout">logout</a>
</body>
</html>