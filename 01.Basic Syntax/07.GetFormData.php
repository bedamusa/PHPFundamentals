<!DOCTYPE html>
<html>
<head>
    <title>GetFormData</title>
</head>
<body>

<form>
    <input type="text" placeholder="Name.." name="name"/></br>
    <input type="number" placeholder="Age.." step="any" name="age"/></br>
    <input type="radio" name="gender" value="male">Male</br>
    <input type="radio" name="gender"  value="female">Female</br>
    <div><br><input type="submit" value="Submit"></div><br></br>
</form>

<?php
if (isset($_GET['name']) && isset($_GET['age']) && isset($_GET['gender'])) {

    $name = $_GET['name'];
    $age = $_GET['age'];
    $gender = $_GET['gender'];
echo "My name is {$name}. I am {$age} years old. I am {$gender}.";

}

?>

</body>
</html>