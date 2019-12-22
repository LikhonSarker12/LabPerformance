<!DOCTYPE html>
<html>
<head>
	<title>Home page</title>
</head>
<body>
	<h1>Employee List</h1>
	<a href="<?php echo e(route('adminhome.index')); ?>">Back</a> | 
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

	 <?php $__currentLoopData = $users; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $s): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
		<tr>
			<td><?php echo e($s->userId); ?></td>
            <td><?php echo e($s->name); ?></td>
            <td><?php echo e($s->address); ?></td>
            <td><?php echo e($s->contract); ?></td>
			<td><?php echo e($s->username); ?></td>
			<td><?php echo e($s->password); ?></td>
			
			
			<td>
				<a href="<?php echo e(route('employee.edit', $s->userId)); ?>">Edit</a> | 
				<a href="<?php echo e(route('employee.delete', $s->userId)); ?>">Delete</a> | 
				<a href="<?php echo e(route('employee.details', $s->userId)); ?>">Details</a>
			</td>
		</tr>
	<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

	</table>

</body>
</html><?php /**PATH C:\Users\Asus\Desktop\LabExam\resources\views/admin/employeelist.blade.php ENDPATH**/ ?>