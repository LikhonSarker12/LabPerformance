<!DOCTYPE html>
<html>
<head>
	<title>Home page</title>
</head>
<body>
	<h1>Welcome Home! <?php echo e(session('name')); ?></h1>

	<a href="<?php echo e(route('admin.profile')); ?>">Profile</a> | 
	<a href="<?php echo e(route('customer.profile')); ?>">Customer List</a> | 
	<a href="/logout">logout</a>

	

</body>
</html><?php /**PATH C:\Users\Asus\Desktop\LabExam\resources\views/home/index.blade.php ENDPATH**/ ?>