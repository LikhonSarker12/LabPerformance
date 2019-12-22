<!DOCTYPE html>
<html>
<head>
	<title>Home page</title>
</head>
<body>
	<h1>Welcome Home! <?php echo e(session('name')); ?></h1>

	<a href="<?php echo e(route('admin.add')); ?>">Add Employee</a> | 
	<a href="<?php echo e(route('employee.list')); ?>">Employee List</a> | 
	<a href="/logout">logout</a>

	

</body>
</html><?php /**PATH C:\Users\Asus\Desktop\LabExam\resources\views/home/admin_index.blade.php ENDPATH**/ ?>