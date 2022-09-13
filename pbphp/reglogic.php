<?php
    session_start();
    
    require_once("connection.php");
    include("index.php");
    
    $rusname=$_POST['regusername'];
    $remail=$_POST['regemail'];
    $rphno=$_POST['regphno'];
    $rloca=$_POST['reglocation'];
    $rpswd = crypt($_POST["regpassword"], '$2a$07$usesomesillystringforsalt$');


    $sql = "INSERT INTO `logdata` (`usname`, `email`, `phno`, `pswd`, `reglocation`) VALUES('$rusname', '$remail', '$rphno','$rpswd', '$rloca')";

    

    $result = $con->query($sql);   

    if ($result){
        echo "Registered Succesfully !!! Please login 🙏";
    }
    else{
        echo mysqli_error($con);
    }
 


    ?>