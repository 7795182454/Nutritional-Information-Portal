<?php
session_start();
$db=mysqli_connect("localhost","root","","auth");
if(isset($_POST['register_btn'])){
    $username=mysqli_real_escape_string($_POST['username']);
    $email=mysqli_real_escape_string($_POST['email']);
    $password=mysqli_real_escape_string($_POST['password']);
    $password2=mysqli_real_escape_string($_POST['password2']);
    if($password==$password2){
        $password=md5($password);
        $sql="INSERT INTO users(username,email,password) VALUES('$username','$email','$password')";
        mysql_query($db,$sql);
         $_SESSION['message']="You are now logged in";
         $_SESSION['username']=$username;
        header("location:index.html");
        
    }else{
        $_SESSION['message']="The two passwords donot match";
        
        
        
    }
}

?>
















<html>
<head>
    </head>
    <style>
    
    
    
    
    
    
    
    
    </style>
    <body>
        <form method="post" action="register.php">
        <table>
            <tr>
            <td>username:</td>
                <td><input type="text" name="username" class="textInput"></td>
            
            </tr>
            
               <tr>
            <td>email:</td>
                <td><input type="email" name="email" class="textInput"></td>
            
            </tr>  
            <tr>
            <td>Password:</td>
                <td><input type="password" name="password" class="textInput"></td>
            
            </tr>
            <tr>
            <td>Password again:</td>
                <td><input type="password" name="password2" class="textInput"></td>
            
            </tr>
            <tr>
            <td></td>
                <td><input type="Submit" name="register_btn" value="Register"></td>
            
            </tr>
            
            
            

            
            </table>
            <p>Already a user login?<a href="login.php"><br/>login</a></p>
        
        
        </form>
    
    
    
    
    </body>
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    


















</html>