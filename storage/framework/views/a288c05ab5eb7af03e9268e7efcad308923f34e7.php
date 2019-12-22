<!DOCTYPE html>
<html>
<head>
	<title>Home page</title>
</head>
<body>
	<h1>Welcome Home! <?php echo e(session('name')); ?></h1>

	<a href="<?php echo e(route('job.add')); ?>">New job</a> | 
	<a href="<?php echo e(route('job.show')); ?>">Job List</a> | 
	<a href="/logout">logout</a>
</body>
</html><?php /**PATH C:\Users\Asus\Desktop\LabExam\resources\views/home/customer_index.blade.php ENDPATH**/ ?>