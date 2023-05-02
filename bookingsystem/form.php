<div>
    <form method="POST">
            <label for="fname">Name:</label>
            <input type="text" id="name" name="name" placeholder="Name" required>
        </div>

        <br>

        <div>
            <label for="email">Email:</label>
            <input type="email" id="email" name="email" placeholder="Email" required>
        </div>

        <br>

        <div>
            <label for="venue">Venue:</label>
            <input type="text" id="venue" name="venue" required>
        </div>

        <br>

        <div>
            <label for="contact_num">Contact number:</label>
            <input type="tel" id="contact_num" name="contact_num" required>
        </div>

        <br>

        <div>
            <label for="package"> Package:</label>
            <input type="text" id="package" name="package" required>
        </div>

        <br>

        <div>
            <label for="payment">payment:</label>
            <select id="payment" name="payment">
                <option value="visa">visa</option>
                <option value="mastercard">mastercard</option>
                <option value="giftcard">giftcard</option>
            </select>
        </div>

        <br>

        <div>
            <label for="date">Date:</label>
            <input type="date" id="date" name="date">
        </div>
        
        <br>


        <div>
            <input type="reset">
        </div>

        <br>

        <div>
            <input type="submit" name = "sub">
        </div>

    </form>



    <table>

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