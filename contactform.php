<?php 
    $name = $_GET['name'];
    $email = $_GET['email'];
    $content = $_GET['content'];

    $msg = "NAME - " . $name . "\nEMAIL - " . $email . "\nCONTENT - " . $content; 

    mail("tanujn45@gmail.com", "MAIL FROM SYMBIESTA", $msg);
    header('Location: index.php');
    exit();
?>
