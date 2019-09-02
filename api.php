<?php
    header("Access-Control-Allow-Origin: *");
    header("Content-Type: aplication/json");
    $method = $_SERVER['REQUEST_METHOD'];

    //case in function works
    if($method == "POST"){
        //user and user actions
        if(isset($_POST['user_login'])){
            user_login();
        }else if(isset($_POST['user_logout'])){
            user_logout();
        }
    }


    ///////// CORE FUNCTIONS ///////////

    # user login function
    function user_login(){
        $decode = json_decode($_POST['user_login']);
        $decode = $decode[0];
        // user signin and verifiction start here. continued....
    }
?>