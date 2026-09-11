<?php
$conn = new mysqli("localhost", "dvwa_user", "dvwa_pass", "dvwa");

if (isset($_GET['Submit'])) {
    $id = $_GET['id'];

    $getid  = "SELECT first_name, last_name FROM users WHERE user_id = '" . $id . "'";
    $result = mysqli_query($conn, $getid);

    $num = mysqli_num_rows($result);
    if ($num > 0) {
        echo "User ID exists in the database.";
    } else {
        echo "User ID is MISSING from the database.";
    }
}
?>
