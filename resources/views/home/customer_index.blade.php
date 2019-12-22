<!DOCTYPE html>
<html>
<head>
	<title>Home page</title>
</head>
<body>
	<h1>Welcome Home! {{session('name')}}</h1>

	<a href="{{route('job.add')}}">New job</a> | 
	<a href="{{route('job.show')}}">Job List</a> | 
	<a href="/logout">logout</a>
</body>
</html>