<?php
  $servername = "db.luddy.indiana.edu";
  $username = "i494f23_kimdaes";
  $password = "my+sql=i494f23_kimdaes";
  $dbname = "i494f23_kimdaes";
  
  // Create connection
  $con = mysqli_connect($servername, $username, $password, $dbname);
  
  // Check connection
  if (!$con) {
    die("Connection failed: " . mysqli_connect_error());
  }
  
  // Assign Variables
  $name = $_POST['name'];
  $email = $_POST['email'];
  $phone = $_POST['phone'];
  $message = $_POST['message'];
  
  $sql = "INSERT INTO Personal_Message(name, email, phone, message)
          VALUES ('$name', '$email', '$phone', '$message')";
  
  if (mysqli_query($con, $sql)) {
    header("Location: contact.html");
  }
  
  else {
    
    die ('SQL Error: ' . mysqli_error($con));
  }
  
  mysqli_close($con);
  
  ?>