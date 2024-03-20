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
// include "db.php";
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

        
        <?php
include "db.php";
$email1=$_SESSION['email'];
    $show_userData="select * from admin where email='$email1'";   
    $detailquery=$sql->query($show_userData);
    if($detailquery->num_rows>0){
      while($result=$detailquery->fetch_assoc()){
    echo '
    <div class="sign-in">
    <a href="#"> <p>Hello, '.$result["fname"].'</p>
    <span>Account &amp; Lists</span></a>
  </div>
 ';
      }

    }
?>


        <div class="returns">
          <a href="#"><p>Returns</p>
            <span class="order">&amp; Orders</span></a>
        </div>

        <div class="cart">
          <a href="#">
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

<div class="account">Your Account</div>
<!-- <br />
<div class="dashboardParent">
<div class="row1">
	<div class="row11">
		<img src="images/amzonorder.jpg" class="imggadjj">
    <br/>
		<div class="headTop">Your Orders</div>
    <br/>
		<div class="headBottom">Track,return, or
		 buy things again</div>
	</div>
    <div class="row12">
    	<img src="images/securelogo.png" class="imggadjj">
      <br/>
    	<div class="headTop">Login & security</div>
      <br/>
		<div class="headBottom">Edit login, 
		  name and number </div>
    </div>
    <div class="row13">
     	<img src="images/primelogo.png" class="imggadjj">
       <br/>
     	<div class="headTop">Prime </div>
       <br/>
		<div class="headBottom">Viw benefits and 

    payment settings</div>
    </div>	 -->
<!-- </div>

<div class="row2">
	<div class="row11">
		<img src="images/location_icon.png" class="imggadjj">
    <br/>
		<div class="headTop">Your Addresses</div>
    <br/>
		<div class="headBottom">Edit addresses for orders and gifts</div>
	</div>
    <div class="row12">
    	<img src="images/payment.png" class="imggadjj">
      <br/>
    	<div class="headTop">Payment Options</div>
      <br/>
		<div class="headBottom">Edit, or add payment methods</div>
    </div>
    <div class="row13">
    	<img src="images/amazonpay.png" class="imggadjj">
      <br/>
    	<div class="headTop">Amazon Pay balance
      </div><br/>
		<div class="headBottom">Add money to your balance</div>
    </div>	
</div>
<div class="row3">
	<div class="row11">
		<img src="images/helpdesk.png" class="imggadjj">
    <br/>
		<div class="headTop">Contact Us</div>
    <br/>
	</div>
  <div class="row12">
    	<img src="images/amazonbusiness.jpg" class="imggadjj">
    	<div class="headTop">Your Business account
      </div><br/>
		<div class="headBottom">Sign up to save upto 28%</div>
    </div>
  <div class=" tohide row13">
    	<img src="images/amzonorder.jpg" class="imggadjj">
    	<div class="headTop">Your Orders</div>
		<div class="headBottom">Track,return, or
		 buy things again</div>
    </div>
</div>
</div>
<br />










 -->


<style>
table {
  font-family: arial, sans-serif;
  border-collapse: collapse;
  width: 90%;
  margin-left:50px;
  margin-top:10px;
  margin-bottom:10px;
}

td, th {
  border: 1px solid #dddddd;
  text-align: left;
  width:25%;
  padding: 8px;
}

tr:nth-child(even) {
  background-color: #dddddd;
}
</style>


<!-- <table>
  <tr>
    <th>Company</th>
    <th>Contact</th>
  </tr>
  <tr>
    <td>Alfreds Futterkiste</td>
    <td>Maria Anders</td>
  </tr>
  <tr>
    <td>Centro comercial Moctezuma</td>
    <td>Francisco Chang</td>
  </tr>
  <tr>
    <td>Ernst Handel</td>
    <td>Roland Mendel</td>
  </tr>
  <tr>
    <td>Island Trading</td>
    <td>Helen Bennett</td>
  </tr>
  <tr>
    <td>Laughing Bacchus Winecellars</td>
    <td>Yoshi Tannamuri</td>
  </tr>
  <tr>
    <td>Magazzini Alimentari Riuniti</td>
    <td>Giovanni Rovelli</td>
  </tr>
</table> -->
<!-- // Functon calling -->
<?php
include "db.php";
$email1=$_SESSION['email'];
    $show_userData="select * from admin where email='$email1'";   
    $detailquery=$sql->query($show_userData);
    if($detailquery->num_rows>0){
      while($result=$detailquery->fetch_assoc()){
    echo '
  <table>
  <tr>
    <th></th>
    <th>Your Details</th>
  </tr>
  <tr>
    <td>First Name</td>
    <td>'.$result["fname"].'</td>
  </tr>
  <tr>
    <td>Last Name</td>
    <td>'.$result["lname"].'</td>
  </tr>
  <tr>
    <td>Contact No.</td>
    <td>'.$result["contact"].'</td>
  </tr>
  <tr>
    <td>Email Id</td>
    <td>'.$result["email"].'</td>
  </tr>
</table>';
      }

    }
?>
<?php
echo'
   <form action="logic.php" method="post">
    <input type="hidden" name="email" value="$emmail">
   <center><input type="submit" name="logout" value="Log out" class="logout"></center>
   </form>';
?>


<!-- // if(isset($_POST['add_cart'])){
//   $id=$_POST['id'];
//   $getid=$_SESSION['id'];

//   $dataselect="select * from cart where pid='$id' AND user_id='$getid'";
//   $dataquery=$sql->query($dataselect);
//   if($dataquery->num_rows>0){
//       while($hee=$dataquery->fetch_assoc()){
//           $qty=$hee['qty']+1;
//           $updatecart="update cart set qty='$qty' where pid='$id' AND user_id='$getid'";
//           $updatequery=$sql->query($updatecart);
//           if($updatequery){
//               echo"card insert";
//               header("Location:add_cart.php");
//           }
//       }
      
//   }
// } -->








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


