<?php 

session_start();

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form  method = "POST">
     Name:  <input type ="text" name = "username" > 
    <br>
     Password: <input type = "password" name = "password">
    <br>
     <input type = "submit" name = "submit">

</form>
<?php
 if(!empty($_POST["username"]) && !empty($_POST["password"]))
 {
     $_SESSION["username"]= $_POST["username"];
     $_SESSION["password"] = $_POST["password"];
 }
 echo session_id();

?>

    
</body>
</html>