<?php

$connection = mysqli_connect('localhost','root','','Alkatour');

if(isset($_POST['send'])){
    $name = $_POST['name'];
    $email = $_POST['email'];
    $number = $_POST['number'];
    $guests = $_POST['guests'];
    $arriving= $_POST['arriving'];
    $leaving= $_POST['leaving'];

    $request = "insert into  book_form(name, email,	number,	guests,	arriving, leaving	
    )values('$name', '$email', '$number', '$guests', '$arriving', '$leaving')";

    mysqli_query($connection, $request);

    header('location:book.html');
   
}

else{
    echo 'try again';
}
?>