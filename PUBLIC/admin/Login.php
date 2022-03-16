<?php 

    function check_login($connect,) 
    {
        if(isset($_SESSION['user_id']))
        {
            $id = $_SESSION['user_id'];
            $query ="select * From client where Id_client in";
            
        }
    }


?>