

<?php 

include 'second.php'; 

if(isset($_POST['sub'])){

    $name = $_POST['name'];
	$email = $_POST['email'];
	$venue = $_POST['venue'];
	$contact_num = $_POST['contact_num'];
	$package = $_POST['package'];
	$payment = $_POST['payment'];
    $date = $_POST['date'];

    $stmt = "INSERT INTO booking_records(name, email, venue, contact_num, package, payment, date) VALUES ('$name', '$email', '$venue', '$contact_num', '$package', '$payment','$date')";
        mysqli_query($connection,$stmt);
        mysqli_close($connection);
 

 
}

?>