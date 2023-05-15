<style>
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
   position: fixed; 
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
