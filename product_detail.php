<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Shopee</title>
  <link rel="stylesheet" href="style.css">
  <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
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






    <!-- <section class="hero-section"></section>

    <section class="shop-section">
      <div class="shop-images">
        <div class="shop-link">
          <h3>Shop Laptops &amp; Tables</h3>
          <img src="images/img-1.png" alt="card">
          <a href="#">Shop now</a>
        </div>
        <div class="shop-link">
          <h3>Shop Smartwatches</h3>
          <img src="images/img-2.png" alt="card">
          <a href="#">Shop now</a>
        </div>
         <div class="shop-link">
          <h3>Create with Strip Lights</h3>
          <img src="images/img-3.png" alt="card">
          <a href="#">Shop now</a>
        </div>
        <div class="shop-link">
          <h3>Home Refresh Ideas</h3>
          <img src="images/img-4.png" alt="card">
          <a href="#">Shop now</a>
        </div>
      </div>
    </section> -->
    <?php
    //SEARCH BOX
// <!--include "db.php";

// $find ="select * from product"; 

// if(isset($_GET["searchbox"])){
//     $category = $_GET["cat"];
//     $search = $_GET["searchbox"];
//  $find ="select * from product where pname LIKE '%$search%'";
//         }
   

   
//    $findquery=$sql->query($find);

//    if($findquery->num_rows>0){
//     echo '  <div class="parent">
// ';


//        while($result=$findquery->fetch_assoc())
//      {
//              $ex=explode(" ", $result["pdesc"]);
//              $aa=explode(" ", $result["pname"]);


//       // header("Location:findproduct.php");
//         echo '<div class="card">
//     <div class="pic"><img src="images/'.$result["image"].'" class="adj"></div>
//     <div class="product">';

// for($j=0;$j<5;$j++){
//         echo $aa[$j];
//          echo " ";
//     } 
//     echo'</div>




//     <div class="des">';
// for($i=0;$i<=6;$i++){
//         echo $ex[$i];
// echo " ";
//     } 
//     echo '<a href="product_detail.php?pid='.$result['id'].' &name='.$result['pname'].' &price='.$result['price'].'">... Read more</a>';
//     echo '</div>

//     <form action="logic.php" method="post">
//     <div class="add_to_cart">
//     <input type="hidden" name="id" value="'.$result['id'].'">
//     <input type="submit" name="add_cart" value="Add to cart" class="cartt">
//     <input type="submit" name="buy_now" value="Buy Now" class="buy">
//     </div>
//     </form>
//     </div> ';-->




//     <div class="cartt">Add to Cart</div>
//     <div class="buy">Buy Now</div>
//

 
//      }
// echo "</div>";
//  }
//  else{
//             echo 'Product not found';      
//      }

   
// ?>


<!-- SEARCH BOX CODE -->

<?php
include "db.php";
echo"<h1>Shopping cart</h1>";
include "db.php";
$getpid=$_GET['pid'];
$getdata="select * from product where id='$getpid'";
$getquery=$sql->query($getdata);
if($getquery->num_rows>0){
 while($result=$getquery->fetch_assoc()){
  echo '<div class="parent">

  <div class="pimg"><img src="images/'.$result['image'].'" class="img"></div>
  <div class="scroll">'.$result['pdesc'].'</div>
  <div class="scroll"><h3>'.$result['price'].'</h3></div>

  <form action="logic.php" method="post">
  <div class="add_to_cart">
  <input type="hidden" name="id" value="'.$result['id'].'">
  </div>
  </form>
 


  <form action="logic.php" method="post">
  <div class="add_to_cart">
  <label for="cars">Choose quantity</label>

  <select name="qtyyy">
    <option value="1">1</option>
    <option value="2">2</option>
    <option value="3">3</option>
    <option value="4">4</option>
    <option value="5">5</option>
  </select>
  <input type="submit" name="qty_22" value="Update Quantity">
  <input type="hidden" name="id" value="'.$result['id'].'">
  </div>
  </form>





<form action="logic.php" method="post">
<div class="add_to_cart">
<input type="hidden" name="id" value="'.$result['id'].'">
<input type="submit" name="add_cart" value="Add to cart">
<input type="submit" name="buy_now" value="buy now">
</div>
</form>
</div>';
 }
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

</body>
</html>

































