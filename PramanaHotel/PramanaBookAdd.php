<?php
  $servername = "localhost";
  $username = "root";
  $password = "";
  $dbname = "pramanahotel";

    // Create connection
    $conn = new mysqli($servername, $username, $password, $dbname);

    // Check connection
    if ($conn->connect_error)
    {
      die("Connection failed: " . $conn->connect_error);
    }

    $custName = $_POST['name'];
    $custEmail = $_POST['email'];
    $custPhone = $_POST['phone'];
    $checkInDate = $_POST['stayInDate'];
    $stayLength = $_POST['stayLength'];
    $type = $_POST['chooseRoom'];
    $charge1 = NULL;
    $charge2 = NULL;
    $charge3 = NULL;
    if(isset($_POST['charge1']) == "on")
    {
      $charge1 = true;
    }
    else
    {
      $charge1 = false;
    }

    if(isset($_POST['charge2']) == "on")
    {
      $charge2 = true;
    }
    else
    {
      $charge2 = false;
    }

    if(isset($_POST['charge3']) == "on")
    {
      $charge3 = true;
    }
    else
    {
      $charge3 = false;
    }

    $sql = "INSERT INTO pramanahotel
    (bookingID, Name, Email, Phone, checkIn, NoDays, Type, Charge1, Charge2, Charge3)
    VALUES (NULL, '$custName', '$custEmail', '$custPhone',
      '$checkInDate', '$stayLength', '$type',
      '$charge1', '$charge2', '$charge3')";

    if ($conn->query($sql) === TRUE)
    {
      echo "New record created successfully";
      header("Location: PramanaBookSuccess.php");
    }
    else
    {
      echo "Error: " . $sql . "<br>" . $conn->error;
    }

    $conn->close();
  ?>
