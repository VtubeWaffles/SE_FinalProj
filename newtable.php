
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
 
include 'connect.php';


 $query = "SELECT * FROM booking_records";
 $data  = $conn->query($query);
 
 while ($row = $data->fetch_assoc())
 {
 ?>

<tr>
                                <td><?php  $row['id']?></td>  
                               <td><?php  $row['name']?></td>  
                               <td><?php  $row['email']?></td>  
                               <td><?php  $row['venue']?></td>
                               <td><?php  $row['contact_num']?></td>
                               <td><?php  $row['package']?></td>
                               <td><?php  $row['payment']?></td>
                               <td><?php  $row['date']?></td>
                               <td><?php  $row['status']?></td>


 </tr>
<?php } ?>

</tbody>
 
</table>