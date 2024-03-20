<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Here</title>
    <style>
        a{
            text-decoration: none;
        }
        a:hover{
            text-decoration: underline;
        }
       
.navbar{
    background-color:blue;
    color:white;
    height:50px;
    width:100%;
    font-size:40px;
    font-weight:100;
    text-align:center;  
}
.formm{
    margin-left:30%;
    height: 325px;
    width:40%;
    box-shadow: 2px 2px 5px 1px black;
    border-radius:10px;
}
.sign{
    font-size:35px;
    font-weight:900;
    text-align:center;
}
.formm .sign{
    text-align:center;
    padding-top:20px;
}
.fnamee{
    width:40%;
}
.m{
    margin-right:4%;
    margin-left:3%;
}
input{
    padding:8px;
    border-radius:10px;
    box-shadow:2px 2px 2px 2px rgba(0,0,0,0.2);
}
/* input:after{
    border:2px solid red;
} */
.emaill{
    width:90%;
    margin-left:3%;
    margin-right:4%;
}
.create{
    width:90%;
    margin-left:3%;
    margin-right:4%;
    background-color:blue;
    padding:10px;
    text-align:center;
    font-size:20px;
    border-radius:10px;
    color:white;
    text-decoration:none;
    font-weight:600;
}
/* .create a{
 
} */
/*.login1{
    width:90%;
    margin-left:3%;
    margin-right:4%;
    background-color:transparent;
    padding:10px;
    text-align:center;
    font-size:20px;
    color:blue;
    text-decoration:none;
    font-weight:200;
    border: 0px;
    box-shadow:none;
    margin-left:15px;
}

.login1:hover{
   text-decoration:underline;
   background-color:skyblue;
   color:black; 
}*/
.login1{
    width:90%;
    margin-left:3%;
    margin-right:4%;
    background-color:blue;
    padding:10px;
    text-align:center;
        border-radius:10px;

    
}
/*.signup{
    width:90%;
    margin-left:4%;
    margin-right:4%;
    background-color:transparent;

    text-align:center;
    font-size:10px;
    border: 0px;
    box-shadow:none;

    
}

.signup:hover{
   text-decoration:underline;
   background-color:skyblue;
   color:black; 
}*/
.signup{
    width:90%;
    margin-left:4%;
    margin-right:4%;
    background-color:transparent;
    padding:10px;
    text-align:center;
    font-size:20px;
    color:blue;
    text-decoration:none;
    font-weight:100;
    box-shadow:none;
    border-radius:10px;
    height: 20px;
}

.signup:hover{
   text-decoration:underline;
   background-color:skyblue;
   color:black; 
}
.log{
   font-size:20px;
    border-radius:10px;
    color:white;
    text-decoration:none;
    font-weight:600;
}
/*.signn{
    color:blue;
    text-decoration:none;
    font-weight:200;
}
  */      </style>
</head>
<body>
    <div class="navbar">
Welcome!
    </div>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<div class="formm">
    <div class="sign">Login</div>
    <form action="logic.php" method="post">
<br>
<input type="input"  class="emaill" placeholder="Enter your email id" name="email">
<br>
<br>
<input type="input"  class="fnamee m" placeholder="Enter your password" name="pass">
<a href="forgotpass.php">Forgot Password</a>
<br>
<br>
<input type="submit"  class="login1 log" value="Log In" name="login">
<!-- <a href="login.php" class="log"><div class=" login1">Login</div></a> -->
<br>
<br>
<a href="index.php"><div class="signup">Sign Up</div></a>
<br>
<br>

<!-- <div class="create">
<a href="createac.php">Create Account</a>
</div>
<div class="login1">
<a href="createac.php">Login</a>
</div> -->
<br>
<br>
</form>


<?php
session_start();
if (isset($_SESSION["HELLO"])){
    echo $_SESSION['HELLO'];
    unset($_SESSION["HELLO"]);
}
?>

</div>





</body>
</html>