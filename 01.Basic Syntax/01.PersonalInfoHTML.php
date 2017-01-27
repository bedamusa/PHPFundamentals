<!DOCTYPE html>
<html>
<head>
    <title>Personal info</title>
</head>
<body>
 
<form>
    <div>Full name</div>
    <input type="text" name="name"/>
    <div>Age</div>
    <input type="number" name="age"/>
    <div><br><input type="submit" value="CHECK PERSONAL INFO"></div><br>
</form>
 
<?php
$name = '';
$age = '';
if (isset($_GET['name']) && isset($_GET['age'])) {	

	$name = $_GET['name'];
    $age = $_GET['age'];
	 echo "My name is " . $name . " and I am " . $age . " years old.";
	}

   
?>
 
</body>
</html>