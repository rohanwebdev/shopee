<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Here</title>
    <style>
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
    height: 450px;
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
.login1{
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
    width:90%;
    /* margin-left:15px; */
    float:left;
    
}

.login1:hover{
   text-decoration:underline;
   background-color:skyblue;
   color:black; 
}
.login2{
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
    width:90%;

    float:left;
    
}

.login2:hover{
   text-decoration:underline;
   background-color:skyblue;
   color:black; 
}
.parent{
    display:block;
}
        </style>
</head>
<body>
    <div class="navbar">
Welcome!
    </div>
<br>
<br>
<div class="formm">
    <div class="sign">Sign Up</div>
    <form action="logic.php" method="post">
<br>
<input type="input"  class="fnamee m" placeholder="Enter your first name" name="fname">
<input type="input"  class="fnamee" placeholder="Enter your last name" name="lname">
<br>
<br>
<input type="text"  class="emaill" placeholder="Enter your email id" name="email">
<br>
<br>
<input type="input"  class="emaill" placeholder="Enter your contact number" name="num">
<br>
<br>
<input type="password"  class="fnamee m" placeholder="Enter your password" name="pass">
<input type="password"  class="fnamee" placeholder="Re-enter your password" name="pass_0">
<br>
<br>
<input type="submit"  class="create" value="Sign Up " name="signup">
<br>
<br>
<div class="parent">
<a href="login.php"><div class="login1">Login</div></a>
<a href="admin.php"><div class="login2">Admin</div></a>
<div>
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
</div>




</body>
</html>

