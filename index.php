<!DOCTYPE html> 
<html lang="en"> 
<head> 
<meta charset="UTF-8"> 
<meta name="viewport" content="width=device-width, initial-scale=1.0"> 
<title>My First PHP Page</title> 
</head> 
<body> 
<h1>Welcome to My First PHP Page</h1> 
<p>Hello, World!</p> 
<?php date_default_timezone_set ('asia/kolkata');?>
<p>Current Date and Time: <?php echo date("Y-m-d H:i:s"); ?></p> 
</body> 
</html> 
