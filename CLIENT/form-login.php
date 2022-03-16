<?php 
    error_reporting(0);
    session_start();
    try{
        $database = new PDO('mysql:host=localhost;dbname=cars;charset=UTF8;','root','');
        $database ->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
    }
    catch (Exception $e) {

       die('Error'." ".$e->getMessage());
    }
    $mail = $_POST['email'];
    $password = $_POST['password'];
    $validation = $_POST['valider'];
    $message ="";

    if(isset($validation))
    {
        if(empty ($mail)) $message.="<li>Put Your Mail!</li>";
        if(empty ($password)) $message.="<li>Put Your password!</li>";
        // if(isset($check))$message.="<li>Please Agree !</li>";
        
        if(empty($message))
        {
            $req=$database->prepare("select Id_client from client Where Mail=? and password=? limit 1");
            $req->setFetchMode(PDO::FETCH_ASSOC);
            $req->execute(array($mail,md5($password)));
            $tab =$req ->fetchAll();
            if(count($tab)==0)
            {

                $message="<li>Failed Login and password </li>";
            }
            else
            {
                $_SESSION["autoriser"]="oui";
                $_SESSION["FULL_NAME"]=strtoupper($tab[0]['Mail']) ;
                header('location:../PUBLIC/index.php');

            }
        }
    }
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

        <form class="form-login" method="post">

            <div class="form-log-in-with-email">

                <div class="form-white-background">

                    <div class="form-title-row">
                        <h1>Log in</h1>
                    </div>

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

</body>

</html>
