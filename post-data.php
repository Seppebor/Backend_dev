<?php

if($_SERVER['REQUEST_METHOD'] != 'POST'){
    echo 'Nowp... You request method is invalid. Please use the correct method to send data...';
    die;
}

if(count($_POST) == 0){
    echo 'Whoop! You made a correct post request! I am missing some data tho...';
    die;
}
if(count($_POST) != 3){
    echo 'Nowp... You should be giving me 3 parameters...';
    die;
}else{
    if(!array_key_exists('first_name',$_POST) || !array_key_exists('last_name',$_POST) || !array_key_exists('feedback',$_POST)){
        echo 'Nowp... You are sending three params but the names are incorrect...';
        die;
    }
    $firstName = $_POST['first_name'];
    $lastName = $_POST['last_name'];
    $feedback = $_POST['feedback'];

    echo 'Whoop! Hello '.$firstName.' '.$lastName."\r\n";
    echo "Your feedback: '$feedback'\r\n";
    echo "Has been send to kevin.van.oevelen@kdg.be... Nah just kidding :p Well done! \r\n";
    echo "You can find the sourcecode for this playground here: https://github.com/NxT-Media-Technology/nxt-backend-http-method-playground";
}
