<!DOCTYPE html>
<html>
<head>
	<title>Home page</title>
</head>
<body>
	<h1>Employee List</h1>
	<a href="{{route('adminhome.index')}}">Back</a> | 
	<a href="/logout">logout</a>
	
	<table border="1">
		<tr>
			<td>ID</td>
            <td> Name</td>
            <td> Address</td>
            <td> Phpone</td>
			<td>Username</td>
			<td>Password</td>
			<td>ACTION</td>
		</tr>

	 @foreach($users as $s)
		<tr>
			<td>{{$s->userId}}</td>
            <td>{{$s->name}}</td>
            <td>{{$s->address}}</td>
            <td>{{$s->contract}}</td>
			<td>{{$s->username}}</td>
			<td>{{$s->password}}</td>
			
			
			<td>
				<a href="{{route('employee.edit', $s->userId)}}">Edit</a> | 
				<a href="{{route('employee.delete', $s->userId)}}">Delete</a> | 
				<a href="{{route('employee.details', $s->userId)}}">Details</a>
			</td>
		</tr>
	@endforeach

	</table>

</body>
</html>