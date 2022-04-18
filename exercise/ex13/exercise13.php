
<?php 
// write a program to set session on successful login.

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
    <form method= "POST">
      Name: <input type = "text" name = "username"> <br>
      PassWord: <input type = "password" name = "password" ><br>
      <input type = "submit" name ="submit">
     
</form> 
<?php 
if(isset($_POST["username"]) && isset($_POST["password"]))
{

    if($_POST['username']===$_SESSION['username']  && $_POST["password"]===$_SESSION["password"])
    {
        echo "Login successfully";
    }
    else{
    
   echo " Login Failed";
   }
}
// output:
// input in register: name:Vu Van Nghia
//                   password: 123456.
// input in exercise13.php : name: Vu Van Nghia
//                            password: 123456
// output: login successfully.
?>
</body>
</html>