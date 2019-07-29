<?php
    $conn = mysqli_connect('localhost', 'root', '', 'security');

    if(!$conn){
        die('db connection faild');
    }

    if($_SERVER["REQUEST_METHOD"] == "POST"){
        $name = $_POST["name"];
        $email = $_POST["email"];
        $phone = $_POST["phone"];
        $msg = $_POST["msg"];
        
        $sql = "INSERT INTO msg (name, email, phone, msg) VALUES ('$name', '$email', '$phone', '$msg')";
        
        if(mysqli_query($conn, $sql)){
            header('Location: index.html');
        }else{
            header('Location: index.html');
        }
        
    }
    else{
        header('Location: index.html');
    }
?>