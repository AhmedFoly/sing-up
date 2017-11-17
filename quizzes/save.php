<?php


include 'functions.php';


$email     = $_POST['email'];
$name      = $_POST['name'];
$password  = $_POST['password'];


$user = [ "$email" => [
    'email' => $email,
    'name' => $name ,
    'password' => $password
        ]
];


$data = readData();

var_dump($data);

$array = array_merge($data,$user);

var_dump($array);
//
saveData($array);
//
echo json_encode(['status' => 'done']);