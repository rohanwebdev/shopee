<?php 
include "db.php";

session_start();

//for sign in FIRST PAGE
function Signup(){
    
}
if(isset($_POST["signup"])){

    
$fname1 = $_POST["fname"];
$lname1 = $_POST["lname"];
$email1 = $_POST["email"];
$num1 = $_POST["num"];
$pass1 = $_POST["pass"];
$pass11 = $_POST["pass_0"];
$otp= rand(1000,9999);

        $userinfo = "INSERT INTO admin (id, fname, lname , email , contact , password, type, otp, status,time)
         VALUES (NULL,'$fname1', '$lname1', '$email1' , '$num1', '$pass1', 'user', '$otp', '0',NULL)";
        
        $userresult = $sql->query($userinfo);

        if($userresult){
        $subject="Welcome, Login Here";
         if(mail($email1, $subject, $otp)){
            $_SESSION['email']=$email1;
            $_SESSION['fname']=$fname1;
              header("Location:verify.php");
         }
        }
        else{
    $_SESSION["HELLO"]="User not found";
    header ("Location:login.php");

    // echo "User Not Found";
}
    }


//     if(isset($_POST["login"])){
// // $fname1 = $_POST["fname"];
// // $lname1 = $_POST["lname"];
// $email1 = $_POST["email"];
// // $num1 = $_POST["num"];
// $pass1 = $_POST["pass"];
// // $pass11 = $_POST["pass_0"];
// //     header("Location:login.php");

// $checkuser ="select * from admin where email='$email1' and password='$pass1' and active='1'" ;
// $checkquery=$sql->query($checkuser);

// if($checkquery->num_rows>0){
   
//    while($result=$checkquery->fetch_assoc())
//      {
//         // if($result['type']=='admin'){
//         //     $_SESSION['username']=$result['name'];
//         //     header("location:admin.php");
//         // }

//         if($result['type']=='admin'){
//             $_SESSION['email']=$result['email'];
//             $_SESSION['id']=$result['id'];
//             header("Location:admin.php");

//         }
         
//         if($result['type']=='user'){
//             $_SESSION['id']=$result['id'];
//             $_SESSION['email']=$result['email'];
//             header("Location:user.php");

//         }

//      }


// }
// else{
//     $_SESSION["HELLO"]="User not found";
//     // header ("Location:login.php");

//     // echo "User Not Found";
// }
// }

if(isset($_POST['verify'])){
    
    $email1=$_POST['email'];    
    $otp=$_POST['otp'];  
    

    $getotp="select * from admin where email='$email1' and otp='$otp'";   
    $updquery=$sql->query($getotp);
    if($updquery->num_rows>0){
        // echo $email1;
        // echo $otp;  
        $upd="update admin set status='0' , otp='0' , active='1' where email='$email1'";
        $upd1=$sql->query($upd);
        // echo $email1;
        // echo $otp;
        if($upd1){
            header("Location:welcome.php");
        }
        
    }
    else{
        $_SESSION['msgg']="invalid otp";
        header("Location:verify.php");
    }
}

if(isset($_POST["login"])){
// $fname1 = $_POST["fname"];
// $lname1 = $_POST["lname"];
$email1 = $_POST["email"];
// $num1 = $_POST["num"];
$pass1 = $_POST["pass"];
// $pass11 = $_POST["pass_0"];
//     header("Location:login.php");

$checkuser ="select * from admin where email='$email1' and password='$pass1' and active='1'" ;
$checkquery=$sql->query($checkuser);

if($checkquery->num_rows>0){
   
   while($result=$checkquery->fetch_assoc())
     {
        // if($result['type']=='admin'){
        //     $_SESSION['username']=$result['name'];
        //     header("location:admin.php");
        // }

        if($result['type']=='admin'){
            $_SESSION['id']=$result['id'];
            $_SESSION['email']=$result['email'];
            header("Location:admin.php");

        }
         
        if($result['type']=='user'){
            $_SESSION['id']=$result['id']; 
            $_SESSION['email']=$result['email'];
            header("Location:user.php");

        }

     }
 }
}

if(isset($_POST["searchh"])){
    $category = $_POST["cat"];
    $search = $_POST["searchbox"];
    if($category=='All')

    $find ="select * from product where pname LIKE '%$search%'" ;
   $findquery=$sql->query($find);

   if($findquery->num_rows>0){
    echo '  <div class="parent">
';
       while($result=$findquery->fetch_assoc())
     {
        echo '<div class="card">
    <div class="pic"><img src="'.$result["pic"].'" class="adj"></div>
    <div class="product">'.$result["product"].'</div>
    <div class="des">'.$result["des"].'</div>
    <div class="readmore"></div>
</div>';  
     }
echo "</div>";
        }

        else{
            echo 'Product not found';
         
     }
        }
        //add to cart
        if(isset($_POST['add_cart'])){
            $id=$_POST['id'];
            $getid=$_SESSION['id'];

            $dataselect="select * from cart where pid='$id' AND user_id='$getid'";
            $dataquery=$sql->query($dataselect);
            if($dataquery->num_rows>0){
                while($hee=$dataquery->fetch_assoc()){
                    $qty=$hee['qty']+1;
                    $updatecart="update cart set qty='$qty' where pid='$id' AND user_id='$getid'";
                    $updatequery=$sql->query($updatecart);
                    if($updatequery){
                        echo"card insert";
                        header("Location:add_cart.php");
                    }
                }
                
            }
            else{
                $cart_insert="INSERT INTO cart(id,user_id,pname,qty,pid,date_time)value(NULL,'$getid','$description','1','$id',NULL)";
                $card_active=$sql->query($cart_insert);
                if($card_active){
                    echo"card insert";
                    header("Location:add_cart.php");
                }
            }
        }

        //add to cart
        if(isset($_POST['add'])){
            $id=$_POST['id'];
            $getid=$_SESSION['id'];

            $dataselect="select * from cart where pid='$id' AND user_id='$getid'";
            $dataquery=$sql->query($dataselect);
            if($dataquery->num_rows>0){
                while($hee=$dataquery->fetch_assoc()){
                    $qty=$hee['qty']+1;
                    $updatecart="update cart set qty='$qty' where pid='$id' AND user_id='$getid'";
                    $updatequery=$sql->query($updatecart);
                    if($updatequery){
                        echo"card insert";
                        header("Location:add_cart.php");
                    }
                }
                
            }
            else{
                $cart_insert="INSERT INTO cart(id,user_id,pname,qty,pid,date_time)value(NULL,'$getid','$description','1','$id',NULL)";
                $card_active=$sql->query($cart_insert);
                if($card_active){
                    echo"card insert";
                    header("Location:add_cart.php");
                }
            }
        }

//       +/- query
if(isset($_POST['addd'])){
    $id=$_POST['id'];
    $getid=$_SESSION['id'];

    $dataselect="select * from cart where pid='$id' AND user_id='$getid'";
    $dataquery=$sql->query($dataselect);
    if($dataquery->num_rows>0){
        while($hee=$dataquery->fetch_assoc()){
            $qty=$hee['qty']+1;
            $updatecart="update cart set qty='$qty' where pid='$id' AND user_id='$getid'";
            $updatequery=$sql->query($updatecart);
            if($updatequery){
                echo"card insert";
                header("Location:add_cart.php");
            }
        }
        
    }
    else{
        $cart_insert="INSERT INTO cart(id,user_id,pname,qty,pid,date_time)value(NULL,'$getid','$description','1','$id',NULL)";
        $card_active=$sql->query($cart_insert);
        if($card_active){
            echo"card insert";
            header("Location:add_cart.php");
        }
    }
}
if(isset($_POST['sub'])){
    echo "hello";
    $id=$_POST['id'];
    $getid=$_SESSION['id'];

    $dataselect="select * from cart where pid='$id' AND user_id='$getid'";
    $dataquery=$sql->query($dataselect);
    if($dataquery->num_rows>0){
        while($hee=$dataquery->fetch_assoc()){
            $qty=$hee['qty']-1;
            if($qty>=1){
                $updatecart="update cart set qty='$qty' where pid='$id' AND user_id='$getid'";
                $updatequery=$sql->query($updatecart);
                if($updatequery){
                    echo"card insert";
                    header("Location:add_cart.php");
                }
            }
            else{
                $updatecart="DELETE FROM cart WHERE pid='$id' AND user_id='$getid'";
                $updatequery=$sql->query($updatecart);
                if($updatequery){
                    echo"card insert";
                    header("Location:add_cart.php");
                }
            }
           
        }
        
    }
    else{
        $cart_insert="INSERT INTO cart(id,user_id,pname,qty,pid,date_time)value(NULL,'$getid','$description','0','$id',NULL)";
        $card_active=$sql->query($cart_insert);
        if($card_active){
            echo"card insert";
            header("Location:user.php");
        }
    }
}
if(isset($_POST['qty_22'])){
    $qtty2=$_POST['qtyyy'];
    $id=$_POST['id'];
    $getid=$_SESSION['id'];
echo "hellooooo";
    $dataselect="select * from cart where pid='$id' AND user_id='$getid'";
    $dataquery=$sql->query($dataselect);
    if($dataquery->num_rows>0){
        while($hee=$dataquery->fetch_assoc()){
            $updatecart="update cart set qty='$qtty2' where pid='$id' AND user_id='$getid'";
            $updatequery=$sql->query($updatecart);
            if($updatequery){
                echo"card insert";
                header("Location:add_cart.php");
            }
        }
        
    }

}

//logout 
if(isset($_POST["logout"])){
    $email1 =$_SESSION["email"];
    
    $logoutuser ="UPDATE admin SET active = '0' WHERE email ='$email1'" ;
    $logoutquery=$sql->query($logoutuser);
    
    if($logoutquery){
            unset($_SESSION['email']);  
            unset($_SESSION['id']);  
            // unset($_SESSION['userid']);  
            header("Location:login.php");   
    }    
}

//functions 
//function of subtract quantity of product from add_art.php 
//line 269 on logic.php
//update cart set qty='$qty' where pid='$id' AND user_id='$getid'";
// function subqty($table,$qty,$id,$getid){
//   update $table set qty=$qty where pid=$id AND user_id= $getid;
// }
    
   









    

?>