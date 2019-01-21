<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
    <link rel="stylesheet" href="login.css">
</head>
<body>
<form method="post">
    <div class="login">
        <h2> LOGIN </h2>
        <input type="text" name="username" placeholder="username"/>
        <input type="password" name="password" placeholder="password"/>
        <input type="submit" value="Sign in"/>
    </div>
</form>
<?php
if($_SERVER["REQUEST_METHOD"]=="POST"){
    $username = $_POST["username"];
    $password = $_POST["password"];
    if($username === "admin" && $password === "admin") {
        echo "<h2>Welcome <span style='color:red'>" . $username. "</span> to website<h2/>";
    }else{
        echo "<h2><span style='color: red'>Login Error</span></h2>";
    }
}
?>
</body>
</html>