
<?php


// Create a connection
$conn = mysqli_connect("localhost", "root", "root","connection");

// Check the connection
if (!$conn) {
    die("Database Not Connected: " . mysqli_connect_error());
}
else
{
    echo "Connected Successfully!";
}
?>
