<!DOCTYPE html>
<html>
<head>
	<title>Account page</title>
	
</head>
<body>

<fieldset>
	<legend>Create Account</legend>
	<form method="post" >
	<input type="hidden" name="_token" value="<?php echo e(csrf_token()); ?>">
    <a href="<?php echo e(route('home.index')); ?>">Back</a>| 
    <a href="<?php echo e(route('login.index')); ?>">Logout</a> 

    <center>	
	<table>
		<tr>
			<td>Cmopany Name:</td>
			<td><input type="text"placeholder="Enter Name "  name="name"></td>
		</tr>			
		<tr>
			<td>Titel:</td>
			<td><input type="text"placeholder="Enter Address" name="titel"></td>
			</tr>
		<tr>
			<td> Address:</td>
			<td><input type="text"placeholder="Enter address" name="address"></td>
		</tr>
		<tr>
			<td>salary:</td>
			<td><input type="text"placeholder="Enter slary"  name="salary"></td>
		</tr>			
		
		
		   
				<tr>
					<td colspan="2">
						<center>
								<input type="submit" name="submit" value="Add employee">
						</center>
					</td>
				</tr> 
				
		   
		
	</table>
	</form>
</center>	
</fieldset>
</body>
</html><?php /**PATH C:\Users\Asus\Desktop\LabExam\resources\views/employee/addjob.blade.php ENDPATH**/ ?>