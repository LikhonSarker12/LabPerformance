<!DOCTYPE html>
<html>
<head>
	<title>Home page</title>
</head>
<body>
	<h1>Welcome Home! {{session('name')}}</h1>

	<a href="{{route('admin.add')}}">Add Employee</a> | 
	<a href="{{route('employee.list')}}">Employee List</a> | 
	<a href="/logout">logout</a>

	

</body>
</html>