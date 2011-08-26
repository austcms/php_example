<?php
/* Include the lib. */
include('aust_lib.php');

/* 
 * Tell the lib where Aust is. 'admin/' is the default,
 * so you wouldn't need this line in this case.
 */
austPath('admin/');
?>
<!DOCTYPE html>
<html>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
	<title>Aust example for PHP</title>
</head>
<body>

<ul>
<?php foreach( austQuery('query=news') as $lastNews ){ ?>
	<li><?php echo $lastNews['title'] ?></li>
<?php } ?>
</ul>

</body>
</html>
