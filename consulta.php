<?php
$con=new mysqli("localhost", "root", "root", "intel");

// Check connection
if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }

// Check if server is alive
if (mysqli_ping($con))
  {
  echo "Connection is ok!";
  }
else
  {
  echo "Error: ". mysqli_error($con);
  }

mysqli_close($con);
?>