<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Shopee</title>
  <link rel="stylesheet" href="style.css">
  <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <style>
   .card{
    height:375px;
    width:20%;
    border:2px solid black;
    border-radius:10px;
    margin-top:50px;
    margin-left:5px;
    margin-right:4%;
    float: left;

   }  
   .pic{
    dispaly:inline-block;
    border:1px solid black;
    height:40%;
    width:90%;
    margin-left: 5%;
    margin-top:5%;
   }  
   .product{
    dispaly:inline-block;
    border:1px solid black;
    height:10%;
    width:90%;
    margin-left: 5%;
    margin-top:5%;
   }
   .des{
    dispaly:inline-block;
    border:1px solid black;
    height:20%;
    width:90%;
    margin-left: 5%;
    margin-top:5%;
    float:left;
   }
   .readmore{
    dispaly:inline-block;
    border:1px solid black;
    height:10%;
    width:50%;
    margin-left:25%;
    margin-top:5%;
   }
   .parent{
    display: inline;

   }
   .adj{
    height: 100%;
    width:100%;
   }
 </style>
</head>
<body>
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

<form>
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

        <div class="sign-in">
         <a href="#"> <p>Hello, sign in</p>
          <span>Account &amp; Lists</span></a>
        </div>

        <div class="returns">
          <a href="#"><p>Returns</p>
            <span>&amp; Orders</span></a>
        </div>

        <div class="cart">
          <a href="#">
            <span class="material-symbols-outlined cart-icon">shopping_cart</span>
            </a>
            <p>Cart</p>
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

if(isset($_GET["searchh"])){
    $category = $_GET["cat"];
    $search = $_GET["searchbox"];
    if($category=='All')

    $find ="select * from product where pname LIKE '%$search%'" ;
   $findquery=$sql->query($find);

   if($findquery->num_rows>0){
    echo '  <div class="parent">
';
       while($result=$findquery->fetch_assoc())
     {
      // header("Location:findproduct.php");
        echo '<div class="card">
    <div class="pic"><img src="images/'.$result["image"].'" class="adj"></div>
    <div class="product">'.$result["pname"].'</div>
    <div class="des">'.$result["pdesc"].'</div>
    <div class="Buy Now"></div>
</div>';  
     }
echo "</div>";
        }

        else{
            echo 'Product not found';
         
     }
        }
?>






    <footer>
      <a href="#" class="footer-title">
        Back to top
      </a>
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


