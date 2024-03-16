<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Page</title>
</head>
<body>

<style>
body{
    height: 100vh;
    justify-content: center;
    align-items: center;
    padding: 100px;
    background-image: url("img/nature.jpg");
    background-position: center;
    background-repeat: no-repeat;
    background-size: cover;
    text-align: center;
}
h1{
    font-size: 25px;
    font-weight: bold;
    position: relative;
}
</style>

<h1> Welcome to My Login Page! </h1>

<form action="process.php" method="POST">

    <label>Email</label></br>
    <input type="email" name="login_email" 
    required placeholder="Enter Email Here!...">
    </br></br>

    <label>Password</label></br>
    <input type="password" name="login_pass" 
    required placeholder="Enter Password Here!...">
    </br></br>

    <input type="submit" name="login" value="LOGIN">
</form>

<p><a href="reg.php"> Click Here To Register! </a></p>
    
</body>
</html>