<!DOCTYPE html>
<html>
<head>
	<title>Home page</title>
</head>
<body>
	<h1>Employee List</h1>
	<a href="{{route('home.index')}}">Back</a> | 
	<a href="/logout">logout</a>
	
	<table border="1">
		<tr>
			<td>ID</td>
            <td> Name</td>
            <td> titel</td>
            <td> Address</td>
			<td>Salary</td>
			
		</tr>

	 @foreach($users as $s)
		<tr>
			<td>{{$s->userId}}</td>
            <td>{{$s->name}}</td>
            <td>{{$s->titel}}</td>
            <td>{{$s->address}}</td>           
			<td>{{$s->salary}}</td>
			
			
			
			<td>
				<a href="{{route('job.edit', $s->userId)}}">Edit</a> | 
				<a href="{{route('jod.details', $s->userId)}}">Delete</a> | 
				<a href="{{route('job.delete', $s->userId)}}">Details</a>
			</td>
		</tr>
	@endforeach

	</table>

</body>
</html>