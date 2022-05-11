<?php 
    error_reporting(0);
    
    // session_start();
    // require_once('config.php');
    
    // if(isset($_POST['submit']))
    // {
    //     if(isset($_POST['email'],$_POST['password']) && !empty($_POST['email']) && !empty($_POST['password']))
    //     {
    //         $email = trim($_POST['email']);
    //         $password = trim($_POST['password']);
    
    //         if(filter_var($email, FILTER_VALIDATE_EMAIL))
    //         {
    //             $sql = "select * from members where email = :email ";
    //             $handle = $pdo->prepare($sql);
    //             $params = ['email'=>$email];
    //             $handle->execute($params);
    //             if($handle->rowCount() > 0)
    //             {
    //                 $getRow = $handle->fetch(PDO::FETCH_ASSOC);
    //                 if(password_verify($password, $getRow['password']))
    //                 {
    //                     unset($getRow['password']);
    //                     $_SESSION = $getRow;
    //                     header('location:index.php');
    //                     exit();
    //                 }
    //                 else
    //                 {
    //                     $errors[] = "Wrong Email or Password";
    //                 }
    //             }
    //             else
    //             {
    //                 $errors[] = "Wrong Email or Password";
    //             }
                
    //         }
    //         else
    //         {
    //             $errors[] = "Email address is not valid";	
    //         }
    
    //     }
    //     else
    //     {
    //         $errors[] = "Email and Password are required";	
    //     }
    
    // }
    ?>
<!DOCTYPE html>
<html>

<head>

	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<title>Login Form</title>
    <style>   
         <?php 
               include('css/form-login.css'); 
               
			     
         ?>  
      </style>
	<link rel="stylesheet" href="css/form-login.css">
    <?php include('favicon.php');?> 

</head>
<body>

        <?php include('header.php');?> 
    <div class="main-content">

        <!-- You only need this form and the form-login.css -->

        <form class="form-login" method="post" action="<?php echo $_SERVER['PHP_SELF'];?>">

            <div class="form-log-in-with-email">

                <div class="form-white-background">

                    <div class="form-title-row">
                        <h1>Log in</h1>
                    </div>
                    <?php 
                        if(isset($errors) && count($errors) > 0)
                        {
                            foreach($errors as $error_msg)
                            {
                                echo '<div class="alert alert-danger">'.$error_msg.'</div>';
                            }
                        }
                    ?>
                    <div class="form-row">
                        <label>
                            <span>Email</span>
                            <input type="email" name="email" >
                        </label>
                    </div>
                    <div class="form-row">
                        <label>
                            <span>Password</span>
                            <input type="password" name="password">
                        </label>
                    </div>

                    <div class="form-row">
                        <button type="submit" name="valider">Log in</button>
                    </div>
                    <div>
                        <ul>
                            <?php echo $message;?>
                        </ul>
                    </div>

                </div>

                <a href="#" class="form-forgotten-password">Forgotten password &middot;</a>
                <a href="#" class="form-create-an-account">Create an account &rarr;</a>

            </div>

            <div class="form-sign-in-with-social">

                <div class="form-row form-title-row">
                    <span class="form-title">Sign in with</span>
                </div>

                <a href="#" class="form-google-button">Google</a>
                <a href="#" class="form-facebook-button">Facebook</a>
                <a href="#" class="form-twitter-button">Twitter</a>

            </div>

        </form>

    </div>
    <?php include('footer.php');?> 
    <!-- <script>alert(<?php $_SESSION["FULL_NAME"] ?>)</script> -->
</body>

</html>
