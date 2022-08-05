<?php

require_once 'DbConfig.php';

$email = $_POST['email'];
$query = "DELETE FROM $table WHERE email='$email'";

$result = mysqli_query($dbc, $query)
    or die("Error" . mysqli_error($dbc));

echo "You have been successfully unsubscribed";

mysqli_close($dbc);

?>