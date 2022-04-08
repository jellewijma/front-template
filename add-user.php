<?php
var_dump($_POST);
if(isset($_POST['submit'])){
    require('db.php');


    $email = $_POST['email'];
    $password = $_POST['password'];
    
    $query = "INSERT INTO user VALUES (NULL, '$email', '$password')";
    
    if (mysqli_query($mysqli, $query)) {
        echo "gelukt";
        header('Location: admin.php');
    } else {
        echo "Niet gelukt";
    }

} else {
    echo "no submit";
}

?>