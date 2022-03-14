<?php 

    try{
        $database = new PDO('mysql:host=localhost;dbname=cars;charset=UTF8;','root','');
        $database ->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
    }
    catch (Exception $e) {

       die('Error'." ".$e->getMessage());
    }

    // $users = $database ->query('Select * From company');
    
    // //Select Table Company&Manufacturer
    // while($row = $users ->fetch())
    // {
    //     echo  "<br>".$row["Id_Company"]." "." ".$row["Name_Company"]." "." ".$row["Year"]." "."<br>";
    // }

    // $manufacturer = $database -> query('Select M.Full_Name,C.Name_Company,M.Year From manufacturer M JOIN company C ON M.Company_id = C.Id_Company');
    // while($row = $manufacturer ->fetch())
    // {
    //     echo  "<br>".$row["Full_Name"]." "." ".$row["Name_Company"]." "." ".$row["Year"]." "."<br>";

    // }


?>
