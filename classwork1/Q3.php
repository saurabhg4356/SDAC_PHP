<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" method="post">
        Name : <input type="text" name="name"><br>
        Age : <input type="number" name="age"> <br>
        Gender : <input type="radio" name="gender" value="male"> Male
        <input type="radio" name="gender" value="female"> Female
         <input type="radio" name="gender" value="other"> Other
         <br>
         <button type="submit">Submit</button>
    </form>
</body>
</html>

<?php
if($_SERVER["REQUEST_METHOD"] === "POST"){
    $name = $_POST['name'];
    $age = $_POST['age'];
    $gender = $_POST['gender'];

    echo "Name: " . $name . "<br>";
    echo "Age: " . $age . "<br>";
    echo "Gender: " . $gender . "<br>";
    
}
?>