<?php 
     include('./config/config.php');

    if(isset($_POST['submit'])){
        echo 'saved';
        $user = $_POST['user'];
        $pass = $_POST['pass'];
        $email = $_POST['email'];

        $query = "INSERT INTO user (username, password , email) VALUES ('$user', '$pass', '$email')";
        $result = mysqli_query($conn, $query);

        if(!$result){
                    echo'error';
        }
        echo'success';
    }
 

?>