<style>
  
  .navbar {
  overflow: hidden;
  background-color: #333;
  font-family: Arial;
}

.Calendar {
	width: 500px;
	height: 500px;
	position: relative;
	margin-left: 50px;
}

.contact {
	background-color: white;
	width: 600px;
	height: 600px;
	position: relative;
	opacity: 0.5;
	top: 50px;
	margin: auto;
}
.contact img {
	width: 64px;
	height: 64px;
	position: relative;
	left: 250px;
	
}
.logo img {
	width:300px;
	height:300px;
}
.contact p {
	font-size: 24px;
	color: black;
	font-family: helvetica;
	margin-bottom: 100px;
	text-align: center;
}

/* Links inside the navbar */
.navbar a {
  float: left;
  font-size: 16px;
  color: white;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
}

/* The dropdown container */
.dropdown {
  position: absolute;
  top: -5px;
  right: 0;
  margin-right: 50px;
  float: left;
  /*overflow: hidden;*/
}

/* Dropdown button */
.dropdown .dropbtn {
  font-size: 16px;
  border: none;
  outline: none;
  color: white;
  padding: 14px 16px;
  background-color: inherit;
  font-family: inherit; /* Important for vertical align on mobile phones */
  margin: 0; /* Important for vertical align on mobile phones */
}


.popup .content {
	width: 300px;
	height: 450px;
	z-index: 2;
	text-align: center;
	top: 50%;
	left: 50%;
	transform: translate(-50%, -150%) scale(0);
	padding: 20px;
	border-radius: 20px;
	background: #262626;
	position: absolute;
	box-shadow: 38px 38px 56px #1e1e1e,
				-25px -25px 38px #1e1e1e;
	z-index: 1;
}

/* Add a red background color to navbar links on hover */
.navbar a:hover, .dropdown:hover .dropbtn {
  background-color: red;
}

/* Dropdown content (hidden by default) */
.dropdown-content {
  display: none;
  position: absolute;
  background-color: #f9f9f9;
  min-width: 160px;
  box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
  z-index: 1;
  right: 0px;
}

/* Links inside the dropdown */
.dropdown-content a {
  float: none;
  color: black;
  padding: 12px 16px;
  text-decoration: none;
  display: block;
  text-align: left;
}


/*
.dropdown-content .open-button {
	float: none;
	color: black;
	padding: 12px 16px;
	text-decoration: none;
	display: block;
	text-align: left;
}*/
/* Button for Login */
.open-button {
	background-color: inherit;
	font-size: 16px;
	float: none;
	color: black;
	padding: 12px 16px;
	text-decoration: none;
	display: block;
	text-align: left;
	border: none;
	cursor: pointer;
	
}

/* Add a grey background color to dropdown links on hover */
.dropdown-content a:hover {
  background-color: #ddd;
}
.dropdown-content button:hover {
  background-color: #ddd;
}
/* Show the dropdown menu on hover */
.dropdown:hover .dropdown-content {
  display: block;
}


/* LOGIN POPUP THINGY */

 {box-sizing: border-box;}

/* Button used to open the contact form - fixed at the bottom of the page */
/*.open-button {
  background-color: #555;
  color: white;
  padding: 16px 20px;
  border: none;
  cursor: pointer;
  opacity: 0.8;
  position: fixed;
  bottom: 20px;
  right: 28px;
  width: 280px;
} */

/* The popup form - hidden by default */
.form-popup {
  display: none;
  position: fixed;
  bottom: 0;
  right: 15px;
  border: 3px solid #f1f1f1;
  z-index: 9;
}

.form-popup h1 {
	display: block;
	color: black;
}

/* Add styles to the form container */
.form-container {
  max-width: 300px;
  padding: 10px;
  background-color: white;
}

/* Full-width input fields */
.form-container input[type=text], .form-container input[type=password] {
  width: 90%;
  padding: 15px;
  margin: 5px 0 22px 0;
  border: none;
  background: #f1f1f1;
}

/* When the inputs get focus, do something */
.form-container input[type=text]:focus, .form-container input[type=password]:focus {
  background-color: #ddd;
  outline: none;
}

/* Set a style for the submit/login button */
.form-container .btn {
  background-color: #04AA6D;
  color: white;
  padding: 16px 20px;
  border: none;
  cursor: pointer;
  width: 100%;
  margin-bottom:10px;
  opacity: 0.8;
}

/* Add a red background color to the cancel button */
.form-container .cancel {
  background-color: red;
}

/* Add some hover effects to buttons */
.form-container .btn:hover, .open-button:hover {
  opacity: 1;
} 

    *{
        margin: 0;
        padding: 0;
        box-sizing: border-box;
        font-family: 'Poppins',sans-serif;
    }
    body{
        height: 100vh;
        justify-content: left;
        margin: 20px 20px 20px 20px;
        background-color: #0d0d0d;

    }
  .formbox
  {
   max-width:550px;
   width: 100%;
   margin-top: 20px;
   margin-bottom: 20px;
   margin-left: 20px;
   margin-right: 20px;
   padding:25px 30px;
   background-color:#a6a6a6;
   border:1px solid black;
   border-radius: 5px;
   position: absolute;
  }
  .table
  {
   left: 650px;
   max-width: 705px;
   width:100%;
   background-color: #a6a6a6;
   border:1px solid black;
   position: absolute; 
   margin-top: 20px;
   margin-bottom: 20px;
   margin-right: 20px;
   margin-left: 20px;
   padding: 25px 30px;
  }
  .title{
    font-size: 25px;
    font-weight: 500;
    position: relative;
    padding-top: 10px;
    padding-bottom: 10px;
    text-align: center;
  }
  .inputbox{
    margin: 0;
    padding: 0;
    box-sizing: border-box;
    font-family: 'Poppins',sans-serif;
    display: flex;
    flex-wrap: wrap;
  }
  .inputbox input{
    height: 40px;
    width: 100%;
  }
  .resetbtn{
    height: 40px;
  }
  .resetbtn input{
    height: 40px;
    width: 100%;
    border: 1px solid black;
    border-radius: 5px;
    background-color: red;
  }
  .submitbtn input{
    height: 40px;
    width: 100%;
    border: 1px solid black;
    border-radius: 5px;
    background-color: #90ee90;
  }
</style>

<div class="navbar">
  <a href="homepage.html">Home</a>
  <a href="html/about-us.html">About Us</a>
  <a href="html/packages.html">Packages</a>
  <a href="html/featured_photos.html">Featured Photos</a>
  <a href="form.php">Order Now</a>
  <div class="dropdown">
    <button class="dropbtn"> <img src="menu-icon.png" width = "32" height = "32">
      <i class="fa fa-caret-down"></i>
    </button>
    <div class="dropdown-content">
      <a href="html/my-orders.html">My Orders</a>
      <a href="html/contact-us.html">Contact Us</a>
	  <button class="open-button" onclick="openForm()">Login</button>
    </div>
  </div>
</div>

<div class = "formbox">
<div class="title">Reservation Form </div>
<form method="POST">
<div class="inputbox"> 
            <label for="fname">Name:</label>
            <input type="text" id="name" name="name" required>
        </div>

        <br>

        <div class="inputbox">
            <label for="email">Email:</label>
            <input type="email" id="email" name="email" required>
        </div>

        <br>

        <div class="inputbox">
            <label for="venue">Venue:</label>
            <input type="text" id="venue" name="venue" required>
        </div>

        <br>

        <div class="inputbox">
            <label for="contact_num">Contact number:</label>
            <input type="tel" id="contact_num" name="contact_num" required>
        </div>

        <br>

        <div class="inputbox">
            <label for="package"> Package:</label>
            <input type="text" id="package" name="package" required>
        </div>

        <br>

        <div class="inputbox">
            <label for="payment">Payment:</label>
            <select id="payment" name="payment">
                <option value="visa">visa</option>
                <option value="mastercard">mastercard</option>
                <option value="giftcard">giftcard</option>
            </select>
        </div>

        <br>

        <div class="inputbox">
            <label for="date">Date:</label>
            <input type="date" id="date" name="date">
        </div>
        
        <br>

        <div class="submitbtn">
            <input type="submit" name = "sub">
        </div>

        <br>
        
        <div class="resetbtn">
            <input type="reset">
        </div>

        

        
</div>

    </form>
    </class>


<div class = "table">
<table border="1">

<tr> 


<th>id</th>
<th>name</th>
<th>Email</th>
<th>Venue</th>
<th>Number</th>
<th>Package</th>
<th>Payment</th>
<th>date</th>

 </tr>

 <tbody>

 </div>

<?php 
include 'second.php'; 

 $query = "SELECT * FROM booking_records";
 $data  = $connection->query($query);
 
 
 while ($row = $data->fetch_assoc())
 {
 ?>

<tr>
                                <td><?php echo $row['id']?></td>  
                               <td><?php echo $row['name']?></td>  
                               <td><?php echo $row['email']?></td>  
                               <td><?php echo $row['venue']?></td>
                               <td><?php echo $row['contact_num']?></td>
                               <td><?php echo $row['package']?></td>
                               <td><?php echo $row['payment']?></td>
                               <td><?php echo $row['date']?></td>
                           
                        

 </tr>

<?php } ?>

</tbody>
 
</table>



<?php  
    include 'formcode.php';

?>
