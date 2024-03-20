<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>


        </style>
</head>

<body>
   <?php
   session_start();
   include "db.php";
   $total="0";
   $userid=$_SESSION['id'];
//    if(isset($_GET['pid'])){
//     $pid=$_GET['pid']; 
//     echo "$pid";
//     $pname=$_GET['name']; 
//     $price=$_GET['price']; 
//     // $qty=$_GET['qty']; 
//     // echo "$qty";
//     $userinfo = "INSERT INTO cart (id, user_id, pname , qty, pid)
//          VALUES (NULL,'$userid', '$pname','1','$pid')";
        
//         $userresult = $sql->query($userinfo);
//         if($userresult){
//             echo"card";
//             header("Location:procard.php");
//         }
        
//     }
//    }
   

   $shopping_details="select * from cart INNER JOIN product ON cart.pid=product.id where cart.user_id='$userid'";
   $get_query=$sql->query($shopping_details);
   echo'
   <div class="maindiv">
   <div class="shopping">
   <div classs="s_cart">
   </div>
   </div>';
   if($get_query->num_rows>0){
    $grandtotal=0;
    while($shopping_result=$get_query->fetch_assoc()){
        $total1=$shopping_result['qty']*$shopping_result['price'];
        // $subtotal=$total+$total1;
        // $grandtotal=$subtotal;
        // echo $shopping_result['pname'];
        echo'<div class="card">
    <div class="pic"><img src="images/'.$shopping_result["image"].'"></div>
    <div class="name"><h2>'.$shopping_result["pname"].'</h2></div>
    <div class="desc"><p>'.$shopping_result["pdesc"].'</p></div>
    <div class="qty"><h3>'.$shopping_result["qty"].'</h3></div>
    <div class="qty"><h3>'.$total1.'</h3></div>
    </div>
    ';
$grandtotal=$grandtotal+$total1;
    }
    echo $grandtotal;
   }

   ?>
</body>
</html>