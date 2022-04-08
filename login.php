<?php
if(isset($_POST['submit'])){
    require('db.php');


    $email = $_POST['email'];
    $password = $_POST['password'];
    
    $query = "SELECT * FROM user WHERE email = '$email' AND password = '$password'";
    
    $result = mysqli_query($mysqli, $query);

    if (mysqli_num_rows($result) > 0) {
        echo "gelukt";
        header('Location: admin.php');
    } else {
        echo "Niet gelukt";
        header('Location: inlog.php');
    }

} else {
    echo "no submit";
}

?>