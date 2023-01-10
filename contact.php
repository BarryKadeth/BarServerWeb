<?php
  if (isset($_REQUEST['name']) && isset($_REQUEST['email']) && isset($_REQUEST['message'])) { 


//Consulting db for Azure
  $server = "baramey.mysql.database.azure.com";
  $username = "baramey";
  $password = "Wellington123!";
  $database = "WebDatabase";

  $conn = mysqli_init();
  mysqli_ssl_set($conn,NULL,NULL,"DigiCertGlobalRootCA.crt.pem",NULL,NULL);
  mysqli_real_connect($conn, $server, $username, $password, $database);

  // Create a MySQLi connection
  // $conn = new mysqli($server, $username, $password, $database);


// consulting db: for a localhost database
  // $conn = new mysqli("localhost", "root", "", "MyFirstDB");


  if ($conn->connect_error) {
      echo "error";
      die("Connection failed: " . $conn->connect_error);
    }

  // 1. I need to collect the data submitted by previous page (i.e. login.php): 
  //The below will crash if the user inputs an apostrophe
  // $name = $_REQUEST ['name'];
  // $email = $_REQUEST['email'];
  // $message = $_REQUEST['message'];
  //real_escape_string means that the user is able to input ' apostrophes
  //Without the code breaking
  $name = $conn -> real_escape_string($_POST['name']);
  $email = $conn -> real_escape_string($_POST['email']);
  $message = $conn -> real_escape_string($_POST['message']);

  echo "<p> name = $name, email = $email and message = $message </p>";

    // Add into contacts
  $sql = "INSERT INTO `contacts` (`id`,`name`, `email`, `message`) VALUES (NULL,'".$name."', '$email', '$message')";
  //echo "<p> sql = $sql </p>";
  $result = $conn->query($sql);

  echo "<script> window.location.href = \"index.php#contactMe\"; </script>";
  } 
?>