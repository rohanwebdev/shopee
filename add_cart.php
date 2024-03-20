<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Shopee</title>
  <link rel="stylesheet" href="style.css">
  <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
  
<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
<script src="https://checkout.razorpay.com/v1/checkout.js"></script>
</head>
<body>
<?php
session_start();
?>
    <header>
      <nav class="navbar">
        <div class="nav-logo">
          <a href="#"><img src="images/amazon_logo.png" alt="logo"></a>
        </div>
        <div class="address">
          <a href="#" class="deliver">Deliver</a>
          <div class="map-icon">
            <span class="material-symbols-outlined">location_on</span>
            <a href="#" class="location">India</a>
          </div>
        </div>

<form action="user.php">
        <div class="nav-search">
          <select class="select-search" name="cat">
            <option value="all">All</option>
          </select>

          <input type="text" placeholder="Search Amazon" class="search-input" name="searchbox">
          <div class="search-icon">
          <input type="image" name="searchh" src="images/search.png" class="searchimg"> 
          </div>
        </div>
</form>
<?php
include "db.php";
$email1=$_SESSION['email'];
    $show_userData="select * from admin where email='$email1'";   
    $detailquery=$sql->query($show_userData);
    if($detailquery->num_rows>0){
      while($result=$detailquery->fetch_assoc()){
    echo '
    <div class="sign-in">
    <a href="userDashboard.php"> <p>Hello, '.$result["fname"].'</p>
    <span>Account &amp; Lists</span></a>
  </div>
 ';
      }

    }
?>

        <!-- <div class="sign-in">
         <a href="userDashboard.php"> <p>Hello, sign in</p>
          <span>Account &amp; Lists</span></a>
        </div> -->

        <div class="returns">
          <a href="#"><p>Returns</p>
            <span class="order">&amp; Orders</span></a>
        </div>

        <div class="cart">
        <?php
          include "db.php";
          // session_start();
          $userid=$_SESSION["id"];
          // echo $_
         
$getqty="select sum(qty) as summ from cart where user_id='$userid'";
$get_query=$sql->query($getqty);
if($get_query->num_rows>0){
 while($shopping_result=$get_query->fetch_assoc()){
     
  //add href to userDashboard.php
  if($shopping_result["summ"]!=""){
  echo'<div class="qtyno">
 <h4>'.$shopping_result["summ"].'</h4>
          </div>';
  }
  else{
    echo'<div class="qtyno">
    <h4>0</h4>
             </div>';
  }
 }

}

?>
          <a href="add_cart.php">
            <span class="material-symbols-outlined cart-icon">shopping_cart</span>
            </a>
        </div>
      </nav>
      
      <div class="banner">
        <div class="banner-content">
          <div class="panel">
            <span class="material-symbols-outlined">menu</span>
            <a href="#">All</a>
          </div>
  
          <ul class="links">
            <li><a href="#">Today's Deals</a></li>
            <li><a href="#">Customer Service</a></li>
            <li><a href="#">Registry</a></li>
            <li><a href="#">Gift Cards</a></li>
            <li><a href="#">Sell</a></li>
          </ul>
          <div class="deals">
            <a href="#">Shop deals in Electronics</a>
          </div>
        </div>
      </div>
    </header>
    
<?php
// echo"<h1>Shopping cart</h1>";
// include "db.php";
// $getpid=$_GET['pid'];
// $getdata="select * from product where id='$getpid'";
// $getquery=$sql->query($getdata);
// if($getquery->num_rows>0){
//  while($result=$getquery->fetch_assoc()){
//   echo '<div class="parent">

//   <div class="pimg"><img src="images/'.$result['image'].'" class="img"></div>
//   <div class="scroll">'.$result['pdesc'].'</div>







// <form action="logic.php" method="post">
// <div class="add_to_cart">
// <input type="hidden" name="id" value="'.$result['id'].'">
// <input type="submit" name="cart" value="buy now">
// </div>
// </form>
// </div>';
//  }
// }

// session_start();
include "db.php";
$total="0";
$userid=$_SESSION['id'];
// if(isset($_GET['pid'])){
//  $pid=$_GET['pid']; 
//  echo "$pid";
//  $pname=$_GET['name']; 
//  $price=$_GET['price']; 
//  // $qty=$_GET['qty']; 
//  // echo "$qty";
//  $userinfo = "INSERT INTO cart (id, user_id, pname , qty, pid)
//       VALUES (NULL,'$userid', '$pname','1','$pid')";
     
//      $userresult = $sql->query($userinfo);
//      if($userresult){
//          echo"card";
//          header("Location:procard.php");
//      }
     
//  }



$shopping_details="select * from cart INNER JOIN product ON cart.pid=product.id where cart.user_id='$userid'";
$get_query=$sql->query($shopping_details);
// echo'
// <div class="maindiv">
// <div class="shopping">
// <div classs="s_cart">
// </div>
// </div>';
if($get_query->num_rows>0){
 $grandtotal=0;
 
 while($shopping_result=$get_query->fetch_assoc()){
  $stock=$shopping_result['stock'];
  // $aa=explode(" ", $shopping_result["pdesc"]);
     $total1=$shopping_result['qty']*$shopping_result['price'];
     // $subtotal=$total+$total1;
     // $grandtotal=$subtotal;
     // echo $shopping_result['pname'];
     echo'
     <div class="parent">
     <div class="cardd">
     <div class="left">
 <div class="picc"><img src="images/'.$shopping_result["image"].'" class="adjj"></div>
 </div>
 <div class="right">
 <div class="name"><h2>'.$shopping_result["pname"].'</h2></div>
 <div class="stock">';
if($stock=="yes"){
  echo "in stock";
}
else{
  echo "out of stock";
}
 echo '</div>';
//  <div class="desc"><p>
//  for($i=0;$i<=60;$i++){
//   echo $aa[$i];
// echo " ";
// } 
//  echo'</p></div>';
 echo'<form action="logic.php" method="post">
 <div class="add_to_cart">
  <input type="submit" name="addd" value="+">
 <div class="qty"><h3>'.$shopping_result["qty"].'</h3></div>
  <input type="submit" name="sub" value="-">
  <input type="hidden" name="id" value="'.$shopping_result['id'].'">
 </div>
 </div>
 </form>
 </div>
 <div class="qty"><h3>'.$total1.'</h3></div>
 </div>
 ';
 
$grandtotal=$grandtotal+$total1;
echo $grandtotal;

 echo'
 <form>
 <input type="button" id="btn" value="Pay Now" onclick="pay_now()">
 <input type="hidden" id="amt" value="'.$grandtotal.'">
 <input type="hidden"  id="name" value="Rohan">
 </form>
 '; 
}
}
else{
  echo '
  <div class="emptycart">
  <br>
  <h2>Your Shopping Bag is Empty.</h2>
  <img  src="images/emptycart.png" id="emptycartimg">
<br>  
  <a href="user.php">Start Shopping Now!</a>
  </div>
  ';
}


?>

<footer >

<a href="#" class="footer-title">
  Back to top
</a>
<br>
<div class="footer-items">
  <ul>
    <h3>Get to Know Us</h3>
    <li><a href="#">About us</a></li>
    <li><a href="#">Careers</a></li>
    <li><a href="#">Press Release</a></li>
    <li><a href="#">Amazon Science</a></li>
  </ul>
  <ul>
    <h3>Connect with Us</h3>
    <li><a href="#">Facebook</a></li>
    <li><a href="#">Twitter</a></li>
    <li><a href="#">Instagram</a></li>
  </ul>
  <ul>
    <h3>Make Money with Us</h3>
    <li><a href="#">Sell on Amazon</a></li>
    <li><a href="#">Sell under Amazon Accelerator</a></li>
    <li><a href="#">Protect and Build Your Brand</a></li>
    <li><a href="#">Amazon Global Selling</a></li>
    <li><a href="#">Become an Affiliate</a></li>
    <li><a href="#">Fulfillment by Amazon</a></li>
    <li><a href="#">Advertise Your Products</a></li>
    <li><a href="#">Amazon Pay on Merchants</a></li>
  </ul>
  <ul>
    <h3>Let Us Help You</h3>
    <li><a href="#">COVID-19 and Amazon</a></li>
    <li><a href="#">Your Account</a></li>
    <li><a href="#">Return Centre</a></li>
    <li><a href="#">100% Purchase Protection</a></li>
    <li><a href="#">Amazon App Download</a></li>
    <li><a href="#">Help</a></li>
  </ul>
</div>
</footer>


<script>
    function pay_now(){
        var name=jQuery('#name').val();
        var amt=jQuery('#amt').val();
        
         jQuery.ajax({
               type:'post',
               url:'payment_process.php',
               data:"amt="+amt+"&name="+name,
               success:function(result){
                   var options = {
                        "key": "rzp_test_paLjarm0Ul3oK9", 
                        "amount": amt*100, 
                        "currency": "INR",
                        "name": "Acme Corp",
                        "description": "Test Transaction",
                        "image": "https://image.freepik.com/free-vector/logo-sample-text_355-558.jpg",
                        "handler": function (response){
                           jQuery.ajax({
                               type:'post',
                               url:'payment_process.php',
                               data:"payment_id="+response.razorpay_payment_id,
                               success:function(result){
                                   window.location.href="thank_you.php";
                               }
                           });
                        }
                    };
                    var rzp1 = new Razorpay(options);
                    rzp1.open();
               }
           });
        
        
    }
</script>

</body>
</html>
