<?php 

    try{
        $database = new PDO('mysql:host=localhost;dbname=cars;charset=UTF8;','root','');
        $database ->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
    }
    catch (Exception $e) {

       die('Error'." ".$e->getMessage());
    }
    
    

    $cls = $database->query('select Mail From client');

    while($row = $cls ->fetch())
    {
        if($_POST['email']==$row['Mail'])
        {
            header("Location: form-login.php");
        }
        else
        {
            $req =$database->prepare('INSERT INTO client(Full_name,Mail,password) VALUES (?,?,?)');
            $req->execute(array($_POST['name'],$_POST['email'],$_POST['password']));
            header("refresh:form-register.php");
            
        }
    }
    
?>
<!DOCTYPE html>
<html>

<head>

	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<title>Registration Form</title>
    <style>   
         <?php 
               include('css/form-register.css'); 
               
			     
         ?>  
      </style>
	<link rel="stylesheet" href="css/form-register.css">
    <?php include('favicon.php');?> 


</head>
    <?php include('header.php');?> 
    <div class="main-content">

        <!-- You only need this form and the form-register.css -->

        <form class="form-register" method="post" action="#">

            <div class="form-register-with-email">

                <div class="form-white-background">

                    <div class="form-title-row">
                        <h1>Create an account</h1>
                    </div>

                    <div class="form-row">
                        <label>
                            <span>Name</span>
                            <input type="text" name="name">
                        </label>
                    </div>

                    <div class="form-row">
                        <label>
                            <span>Email</span>
                            <input type="email" name="email">
                        </label>
                    </div>

                    <div class="form-row">
                        <label>
                            <span>Password</span>
                            <input type="password" name="password">
                        </label>
                    </div>

                    <!-- <div class="form-row">
                        <label class="form-checkbox">
                            <input type="checkbox" name="checkbox" checked>
                            <span>I agree to the <a href="#">terms and conditions</a></span>
                        </label>
                    </div> -->

                    <div class="form-row">
                        <button type="submit">Register</button>
                    </div>

                </div>

                <a href="form-login.php" class="form-log-in-with-existing">Already have an account? Login here &rarr;</a>

            </div>

            <!-- <div class="form-sign-in-with-social">

                <div class="form-row form-title-row">
                    <span class="form-title">Sign in with</span>
                </div>

                <a href="#" class="form-google-button">Google</a>
                <a href="#" class="form-facebook-button">Facebook</a>
                <a href="#" class="form-twitter-button">Twitter</a>

            </div> -->

        </form>

    </div>
    <?php include('footer.php');?> 
</body>

</html>