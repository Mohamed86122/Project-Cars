<?php 
    error_reporting(0);
    // session_start();
    // require_once('../config.php');
    
    // if(isset($_POST['submit']))
    // {
    //     if(isset($_POST['first_name'],$_POST['last_name'],$_POST['email'],$_POST['password']) && !empty($_POST['first_name']) && !empty($_POST['last_name']) && !empty($_POST['email']) && !empty($_POST['password']))
    //     {
    //         $firstName = trim($_POST['first_name']);
    //         $lastName = trim($_POST['last_name']);
    //         $email = trim($_POST['email']);
    //         $password = trim($_POST['password']);
            
    //         $options = array("cost"=>4);
    //         $hashPassword = password_hash($password,PASSWORD_BCRYPT,$options);
    //         $date = date('Y-m-d H:i:s');
    
    //         if(filter_var($email, FILTER_VALIDATE_EMAIL))
    //         {
    //             $sql = 'select * from members where email = :email';
    //             $stmt = $pdo->prepare($sql);
    //             $p = ['email'=>$email];
    //             $stmt->execute($p);
                
    //             if($stmt->rowCount() == 0)
    //             {
    //                 $sql = "insert into members (first_name, last_name, email, `password`, created_at,updated_at) values(:fname,:lname,:email,:pass,:created_at,:updated_at)";
                
    //                 try{
    //                     $handle = $pdo->prepare($sql);
    //                     $params = [
    //                         ':fname'=>$firstName,
    //                         ':lname'=>$lastName,
    //                         ':email'=>$email,
    //                         ':pass'=>$hashPassword,
    //                         ':created_at'=>$date,
    //                         ':updated_at'=>$date
    //                     ];
                        
    //                     $handle->execute($params);
                        
    //                     $success = 'User has been created successfully';
                        
    //                 }
    //                 catch(PDOException $e){
    //                     $errors[] = $e->getMessage();
    //                 }
    //             }
    //             else
    //             {
    //                 $valFirstName = $firstName;
    //                 $valLastName = $lastName;
    //                 $valEmail = '';
    //                 $valPassword = $password;
    
    //                 $errors[] = 'Email address already registered';
    //             }
    //         }
    //         else
    //         {
    //             $errors[] = "Email address is not valid";
    //         }
    //     }
    //     else
    //     {
    //         if(!isset($_POST['first_name']) || empty($_POST['first_name']))
    //         {
    //             $errors[] = 'First name is required';
    //         }
    //         else
    //         {
    //             $valFirstName = $_POST['first_name'];
    //         }
    //         if(!isset($_POST['last_name']) || empty($_POST['last_name']))
    //         {
    //             $errors[] = 'Last name is required';
    //         }
    //         else
    //         {
    //             $valLastName = $_POST['last_name'];
    //         }
    
    //         if(!isset($_POST['email']) || empty($_POST['email']))
    //         {
    //             $errors[] = 'Email is required';
    //         }
    //         else
    //         {
    //             $valEmail = $_POST['email'];
    //         }
    
    //         if(!isset($_POST['password']) || empty($_POST['password']))
    //         {
    //             $errors[] = 'Password is required';
    //         }
    //         else
    //         {
    //             $valPassword = $_POST['password'];
    //         }
            
    //     }
    
    // }
    

?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>

	<title>Sign Up</title>
    <style>   
         <?php 
               include('css/form-register.css'); 
               
			     
         ?>  
      </style>
	<link rel="stylesheet" href="css/form-register.css">
    <?php include('favicon.php');?> 
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.9.0/css/all.css">
    <link href="https://unpkg.com/tailwindcss@^2.0/dist/tailwind.min.css" rel="stylesheet">
</head>
    <?php include('header.php');?> 
    <div class="main-content">
        <form class="form-register" id="form" method="POST" action="<?php echo $_SERVER['PHP_SELF'];?>">

            <div class="form-register-with-email">

                <div class="form-white-background">

                    <div class="form-title-row">
                        <h1>Create an account</h1>
                    </div>
                    <?php 
                        if(isset($errors) && count($errors) > 0)
                        {
                            foreach($errors as $error_msg)
                            {
                                echo '<div class="alert alert-danger">'.$error_msg.'</div>';
                            }
                        }
                        
                        if(isset($success))
                        {
                            
                            echo '<div class="alert alert-success">'.$success.'</div>';
                        }
                    ?>
                    <div class="form-row">
                        <label>
                            <span>FirstName</span>
                            <input type="text" name="first_name" >
                        </label>
                    </div>
                    <div class="form-row">
                        <label>
                            <span>LastName</span>
                            <input type="text" name="last_name" >
                        </label>
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
                            <input type="password" name="password" >
                        </label>
                    </div>
                    <div class="form-row">
                        <label class="form-checkbox">
                            <input type="checkbox" name="checkbox" >
                            <span>I agree to the <a href="#">terms and conditions</a></span>
                        </label>
                    </div>
                    <div class="form-row">
                        <button name="btn" type="submit">Submit</button>
                    </div>
                    <div>
                        <ul>
                            <?php echo $message;?>
                        </ul>
                    </div>
                </div>

                <a href="form-login.php" class="form-log-in-with-existing">Already have an account? Login here &rarr;</a>

            </div>

            <div class="form-sign-in-with-social">

                <div class="form-row form-title-row">
                    <span class="form-title">Sign in with</span>
                </div>

                <a href="#" class="form-google-button"><i class="fab fa-google"></i></a>
                <a href="#" class="form-facebook-button"><i class="fab fa-facebook-f"></i></a>
                <a href="#" class="form-twitter-button"><i class="fab fa-twitter"></i></a>

            </div>
            <!-- <div class="modal" >
                <p class="message"></p>
                <div class="options">
                <button class="btn" id="Yes">OK</button>
            </div> -->
            
        </form>
            <!-- <script>
                let fr = document.querySelector('#form');
                fr.addEventListener('submit',()=>{
                        swal({
                            title: "Please!",
                            text:"Fill the Form",
                            icon: "warning",
                            button: "Aww yiss!",
                        });
                });
    //             $(document).ready(function(){
    //         $('#contact-form').on('submit',function(e) {  //Don't foget to change the id form
    //         $.ajax({
    //             url:'contact.php', //===PHP file name====
    //             data:$(this).serialize(),
    //             type:'POST',
    //             success:function(data){
    //                 console.log(data);
    //                 //Success Message == 'Title', 'Message body', Last one leave as it is
    //                 swal("¡Success!", "Message sent!", "success");
    //             },
    //             error:function(data){
    //                 //Error Message == 'Title', 'Message body', Last one leave as it is
    //                 swal("Oops...", "Something went wrong :(", "error");
    //             }
    //             });
    //             e.preventDefault(); //This is to Avoid Page Refresh and Fire the Event "Click"
    // });
    // });




            </script>
    </div> -->
    <?php include('footer.php');?> 
</body>

</html>
