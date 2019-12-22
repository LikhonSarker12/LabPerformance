<!DOCTYPE html>
<html>
<head>
	<title>Home page</title>
</head>
<body>
	<h1>Employee List</h1>
	<a href="<?php echo e(route('home.index')); ?>">Back</a> | 
	<a href="/logout">logout</a>
	
	<table border="1">
		<tr>
			<td>ID</td>
            <td> Name</td>
            <td> titel</td>
            <td> Address</td>
			<td>Salary</td>
			
		</tr>

	 <?php $__currentLoopData = $users; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $s): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
		<tr>
			<td><?php echo e($s->userId); ?></td>
            <td><?php echo e($s->name); ?></td>
            <td><?php echo e($s->titel); ?></td>
            <td><?php echo e($s->address); ?></td>           
			<td><?php echo e($s->salary); ?></td>
			
			
			
			<td>
				<a href="<?php echo e(route('job.edit', $s->userId)); ?>">Edit</a> | 
				<a href="<?php echo e(route('jod.details', $s->userId)); ?>">Delete</a> | 
				<a href="<?php echo e(route('job.delete', $s->userId)); ?>">Details</a>
			</td>
		</tr>
	<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

	</table>

</body>
</html><?php /**PATH C:\Users\Asus\Desktop\LabExam\resources\views/employee/jobshow.blade.php ENDPATH**/ ?>