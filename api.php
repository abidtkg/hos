<?php
    header("Access-Control-Allow-Origin: *");
    header("Content-Type: aplication/json");
    $method = $_SERVER['REQUEST_METHOD'];
    date_default_timezone_set('America/Los_Angeles');
    //case in function works
    if($method == "POST"){
        //user and user actions
        if(isset($_POST['user_login'])){
            user_login();
        }else if(isset($_POST['user_logout'])){
            user_logout();
        }else if(isset($_POST['user_signup'])){
            user_signup();
        }
    }


    ///////// CORE FUNCTIONS //////////

    # user login function
    function user_login(){
        $decode = json_decode($_POST['user_login']);
        $decode = $decode[0];
        // user signin and verifiction start here. continued....
    }

    # user sign up function
    function user_signup(){
        include 'db-config.php';

        $decode = json_decode($_POST['user_signup']);
        $decode = $decode[0];
        $name = $decode->name;
        $email = $decode->email;
        $password = $decode->password;
        $name = mysqli_real_escape_string($conn, $name);
        $email = mysqli_real_escape_string($conn, $email);
        $password = mysqli_real_escape_string($conn, $password);
        // verification start here
        if(empty($name) || empty($email) || empty($password)){
            print_r(json_encode("isert_null"));
            exit();
        }else{
            $password_length = strlen($password);
            if($password_length < 8){
                print_r(json_encode("password_short"));
                exit();
            }else{
                $sql = "SELECT * FROM users";
                $number_of_acc = mysqli_query($conn, $sql);
                $number_of_acc = mysqli_num_rows($number_of_acc);
                if($number_of_acc < 1){
                    $password = password_hash($password, PASSWORD_DEFAULT);
                    $date = date('m/d/Y h:i:s a', time());
                    $sql = "INSERT INTO `users` (`name`, `email`, `password`, `signup_date`) VALUES ('$name', '$email', '$password', '$date')";
                    mysqli_query($conn, $sql);
                    print_r(json_encode("signup_success"));
                }else{
                    print_r(json_encode("already_exist"));
                    exit();
                }
            }
        }
    }
?>