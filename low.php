<?php
if( isset( $_GET[ 'Submit' ] ) ) {
    // Get input
    $id = $_GET[ 'id' ];

    // Check database
    $getid  = "SELECT first_name, last_name FROM users WHERE user_id = '" . $id . "';";
    $result = mysqli_query($GLOBALS["___mysqli_ston"], $getid );

    // Get results
    $num = @mysqli_num_rows( $result );
    if( $num > 0 ) {
        echo '<pre>User ID exists in the database.</pre>';
    } else {
        header( $_SERVER[ 'SERVER_PROTOCOL' ] . ' 404 Not Found' );
        echo '<pre>User ID is MISSING from the database.</pre>';
    }
}
?>
