<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" method="get">
        Email : <input type="text" name="email">
        Password : <input type="password" name="pass" id="">
        I have read the newsletter <input type="checkbox" name="sub" id="">
        <button type="submit">Submit</button>
    </form>
</body>
</html>

<?php
if($_SERVER["REQUEST_METHOD"] === "GET"){
    $email = $_GET["email"];
    $password = $_GET["pass"];
    $subscribe = isset($_GET["sub"])?"subscribed":"Not subscribe";
    echo "Thank you for signing up, $email. You have $subscribe to the newsletter.";
}

?>