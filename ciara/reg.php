<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration Page</title>
</head>
<body>
    <style>

body{
    height: 100vh;
    justify-content: center;
    align-items: center;
    padding: 100px;
    background-image: url("img/beautiful.jpg");
    background-position: center;
    background-repeat: no-repeat;
    background-size: cover;
    text-align: center;
    border: 100px;
}
h1{
    font-size: 25px;
    font-weight: bold;
    position: relative;
}
    </style>

    <h1> Registration Form </h1>

    <form action="process.php" method="POST">

        <label>Name: </label> </br>
        <input type="text" name="nm" required></p>

        <label>Email: </label> </br>
        <input type="email" name="email" required></p>

        <label>Password: </label> </br>
        <input type="password" name="pass" required></p>

        <label>Phone Number: </label> </br>
        <input type="text" name="pn" required></p>

        <input type="submit" name="reg_button" value="Register">
    </form>

    <p><a href="index.php"> Click Here To Login! </a></p>
    
</body>
</html>