<?php
session_start();

error_reporting(E_ALL);
ini_set('display_errors', 1);

include 'connect.php';

if (isset($_POST['submit_donations'])) {
    if($_SESSION['role'] == 'owner'){
     
        echo "<script>
        alert('Your the owner :/');
        window.location.href = 'aboutUs.php';
        </script>";
        exit();

    } else if ($_SESSION['role'] == 'member') {
    $ammount = $_POST['donations'];

    $sql = "UPDATE users 
            SET balance_user = balance_user + $ammount 
            WHERE role = 'owner'";

    if ($conn->query($sql) === TRUE) {
        echo "<script>
        alert('WOW! thankyou thankyou! thankyou!! for donation! :)');
        window.location.href = 'aboutUs.php';
        </script>";

    } else {
        echo "Error: " . $conn->error;
    }
    } else {
        echo "<script>
        window.location.href = 'login.php';
        </script>";
    }
}
$conn->close();
?>