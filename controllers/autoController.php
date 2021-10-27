<?php
require_once 'config/db.php';

$errors = array();


if(isset($_POST['submit'])){
    $name = $_POST['name'];
    $email = $_POST['email'];
    $days = $_POST['days'];
    $phone_num = $_POST['phone_num'];
    $country = $_POST['country'];
    $pickup_time = $_POST['pickup_time'];
    $location = $_POST['location'];

    // validation
    if(empty($name)){
        $errors['name'] = "name is required";
    }
    if(!filter_var($email, FILTER_VALIDATE_EMAIL)){
        $errors['email'] = "Email is invalid";
    }
    if(empty($email)){
        $errors['email'] = "Email required";
    }
    // if(!filter_var($phone_num, FILTER_SANITIZE_NUMBER_INT)){
    //     $errors['phone_num'] = "Phone number invalid";
    // }
    if(empty($phone_num)){
        $errors['phone_num'] = "Number is required";
    }
    if(empty($country)){
        $errors['country'] = "Name your country";
    }
    if(empty($days)){
        $errors['days'] = "Pick a day";
    }
    if(empty($pickup_time)){
        $errors['pickup_time'] = "pick a time";
    }
    if(empty($location)){
        $errors['location'] = "location required";

    }


    if(count($errors) === 0){
        $token = bin2hex(random_bytes(50));
        $verified = false;

        $sql = "INSERT INTO car_users (name, email, phone_num, country, pickup_time,days, verified, token, location) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?)";
        $stmt = $conn->prepare($sql);
        $stmt->bind_param('ssbsbsbss', $name, $email, $phone_num, $country, $pickup_time, $days, $verified, $token, $location);
        
        if($stmt->execute()){
            $user_id = $conn->$insert_id;

            header("location: index.php");
            exit();

        }else{
            $errors['db_error'] = "Database error: failed to register";
        }
    }
}

?>