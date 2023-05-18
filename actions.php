<?php
    require "db.php";
    
    $action = $_GET['action'];
    
    if($action === "signup"){
        signup();
    }else{
        header("location: error404.html");
    }
    
    function signup(){
        global $conn;
        
        extract($_POST);
        
        $sql = "INSERT INTO user_info SET firstname='{$Name}',lastname='{$Surname}',email='{$email}',cellphone='{$cellphone}'";
        
        $save = $conn->query($sql) or die($conn->error);
        
        if($save){
            echo 1;
        }else{
            echo '0' . $save;
        }
    }