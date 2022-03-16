<?php 
    error_reporting(0);
    try{
        $database = new PDO('mysql:host=localhost;dbname=cars;charset=UTF8;','root','');
        $database ->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
    }
    catch (Exception $e) {

       die('Error'." ".$e->getMessage());
    }

    $Nom = $_POST['name'];
    $mail = $_POST['email'];
    $password = $_POST['password'];
    $submit = $_POST['btn'];
    $confirm = $_POST['confirmation'];
    // $check = $_POST['checkbox'];
    $message ="";
    
        if(isset($submit))
        {
            if(empty ($Nom)) $message="<li>invalid name!</li>";
            if(empty ($mail)) $message.="<li>invalid mail!</li>";
            if(empty ($password)) $message.="<li>invalid password!</li>";
            if($password!=$confirm) $message.="<li>Please enter your password correctly !</li>";
            // if(isset($check))$message.="<li>Please Agree !</li>";
            
            if(empty($message))
            {
                $url = "form-login.php";
                $req=$database->prepare("select Id_client from client Where Mail=? limit 1");
                $req->setFetchMode(PDO::FETCH_ASSOC);
                $req->execute(array($mail));
                $tab =$req ->fetchAll();
                if(count($tab)>0)
                {
                    echo "<script> alert('Mail is already existed !')</script>";
                    header("Location: $url");



                }
                else
                {
                    $insert =$database->prepare("INSERT INTO client(Full_Name,Mail,password) VALUES (?,?,?)");
                    $insert->execute(array($Nom,$mail,md5($password)));
                    // include('notification.php');
                    sleep(4);
                    header("url: $url");  
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
        <form class="form-register" method="post" id="form">

            <div class="form-register-with-email">

                <div class="form-white-background">

                    <div class="form-title-row">
                        <h1>Create an account</h1>
                    </div>

                    <div class="form-row">
                        <label>
                            <span>Name</span>
                            <input type="text" name="name" >
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
                        <label>
                            <span>Confirm</span>
                            <input type="password" name="confirmation"  >
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
            <script>
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
    </div>
    <?php include('footer.php');?> 
</body>

</html>
