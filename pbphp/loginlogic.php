<?php
    session_start();
    require_once("connection.php");
    $usname=$_SESSION["usname"];
    $pswd = crypt($_SESSION["pswd"], '$2a$07$usesomesillystringforsalt$');

    
    
    
    $flag=0;
    if(str_contains($usname,"@")) $flag = 1;

    if($flag==1){
        $sql = "SELECT * FROM logdata WHERE email='$usname'";
    }
    else{
        $sql = "SELECT * FROM logdata WHERE usname='$usname' or phno='$usname' ";
    }

    $result = $con->query($sql);

    if ($result->num_rows > 0) {
        while($row = $result->fetch_assoc()) {
            if($pswd == $row["pswd"]){
                $_SESSION["auth"] = 1;
                $_SESSION["username"] = $usname;
                header("Location: home.php");
            }
        }
    // session_destroy();
    }
    
    ?>

  