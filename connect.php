<?php
$firstname  = $_POST['firstname'] ;
$lastname  = $_POST['lastname'] ;
$email  = $_POST['email'] ;
$subject  = $_POST['subject'] ;

//Database connection
$conn = new mysqli('localhost' , 'root' , 'Pratik123@rai' ,'contactform');
if($conn->connect_error){
    die('Connection Failed : '.$conn->connect_error );
    }
    else {
		$stmt = $conn->prepare("insert into contactus(firstname, lastname,email,subject) values(?, ?, ?, ?)");
		$stmt->bind_param("ssss", $firstname, $lastname, $email, $subject);
		$execval = $stmt->execute();
		echo $execval;
		echo "Thank you for the message";
		$stmt->close();
		$conn->close();
	}
?>

