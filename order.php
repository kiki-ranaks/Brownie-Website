<?php
if(isset($_POST['submit'])){
    $flavor = $_POST['flavor'];
    $size = $_POST['size'];
    $quantity = $_POST['quantity'];
    $delivery = $_POST['delivery'];
   $conn = mysqli_connect("localhost", "root", "", "smie");
    if (!$conn) {
        die("Connection failed: " . mysqli_connect_error());
    }

    $sql = "INSERT INTO order(flavor, size, quantity, delivery) VALUES ('$flavor', '$size', '$quantity', '$delivery')";

    if (mysqli_query($conn, $sql)) {
        echo "Order sent successful!";
    } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }

    mysqli_close($conn);
}
?>





