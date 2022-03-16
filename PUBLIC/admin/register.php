<?php 
    session_start();
        include("database.php");
        include("Login.php");

        $user_data = check_login($connect);

        
    // $cls = $database->query('select Mail From client');

    // while($row = $cls ->fetch())
    // {
    //     if($_POST['email']==$row['Mail'])
    //     {
    //         header("Location: form-login.php");
    //     }
    //     else
    //     {
    //         $req =$database->prepare('INSERT INTO client(Full_name,Mail,password) VALUES (?,?,?)');
    //         $req->execute(array($_POST['name'],$_POST['email'],$_POST['password']));
    //         header("refresh:form-register.php");
            
    //     }
    // }
?>