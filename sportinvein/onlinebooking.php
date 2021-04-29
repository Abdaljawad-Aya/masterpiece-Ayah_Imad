<?php

$surname = $_POST['surname'];
$firstname = $_POST['firstname'];
$address = $_POST['address'];
$dob = $_POST['dob'];
$mobile = $_POST['mobile'];
$number = $_POST['number'];
$city = $_POST['city'];
$post_code = $_POST['post_code'];

if (
    !empty($surname) ||
    !empty($firstname) ||
    !empty($address) ||
    !empty($dob) ||
    !empty($mobile) ||
    !empty($number) ||
    !empty($city) ||
    !empty($post_code)
){
$host = 'localhost';
$dbUsername = 'root';
$dbPassword = '';
$dbname = 'sportinveins';
// connection
$con = new mysqli($host, $dbUsername, $dbPassword, $dbname);
if (mysqli_connect_error()) {
    die(
        'Connection Error(' .
            mysqli_connect_errno() .
            ')' .
            mysqli_connect_error()
    );
} else {
    $SELECT = 'SELECT number FROM booking WHERE number = ? LIMIT 1';
    $INSERT =
        'INSERT INTO booking (surname,firstname,address, dob, mobile, number, city, post_code) VALUES (?,?,?,?,?,?,?,?)';

    // prepare statment

    $pst = $con->prepare($SELECT);
    $pst->bind_param('s', $surname);
    $pst->execute();
    $pst->bind_result($surname);
    $pst->store_result();
    $rnum = $pst->num_rows;

    if ($rnum == 0) {
        $pst->close();
        $pst = $con->prepare($INSERT);
        $pst->bind_param(
            'ssssssss',
            $surname,
            $firstname,
            $address,
            $dob,
            $mobile,
            $number,
            $city,
            $post_code
        );
        $pst->execute();
        echo 'New Record Added Successfully';
        
    } else {
        echo 'This Fields Already Exist';
    }
    $pst->close();
    $con->close();
}


}else {
  echo "Fields Are Required";
  die();
}

?>