<?php


if($_SERVER['REQUEST_METHOD'] != 'GET'){
    echo 'Nowp... You request method is invalid. Please use the correct method to get data...';
    die;
}

if(count($_GET) == 0){
    echo 'Whoop! You made a correct get request! I am missing some data tho...';
    die;
}
if(count($_GET) != 2){
    echo 'Nowp... You should be giving me 2 parameters...';
    die;
}else{
    if(!array_key_exists('first_name',$_GET) || !array_key_exists('last_name',$_GET)){
        echo 'Nowp... You are sending two params but the names are incorrect...';
        die;
    }
    $firstName = $_GET['first_name'];
    $lastName = $_GET['last_name'];
    echo "Whoop! Hello '.$firstName.' '.$lastName.'. Well done!\r\n";
}
