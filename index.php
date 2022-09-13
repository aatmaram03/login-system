<?php
  require_once("connection.php");
?>

<!DOCTYPE html>
<html>
<head>
  <title>Fakebook</title>

  <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
  <link rel="stylesheet" type="text/css" href="css/style.css">
</head>
<body>
  <!-- nav -->
  <nav class="navbar navbar-default">
    <div class="container-fluid">
      <div class="navbar-header">
        <a class="navbar-brand" href="index.php">Fakebook</a>
      </div>
    </div>
  </nav>
  <!-- ./nav -->

  <!-- main -->
  <main class="container">
  <h1 class="text-center">Welcome to Fakebook <br><small>A simple Facebook clone.</small></h1>

    <div class="row">
      <div class="col-md-6">
        <h4>Login to start enjoying unlimited fun!</h4>

        <!-- login form -->
        <form method="post" >
          <div class="form-group">
            <input class="form-control" type="text" name="username" placeholder="Phone number, Username, or email">
            <p style = "color: red";>
            
            <?php
            // session_start();
            require_once("connection.php");

            if (isset($_POST['login'])){
              if (empty($_POST["username"])){
                echo 'Please Enter a Valid Username !' ;
                header("index.php") ; 
              }
              elseif (empty($_POST["password"])){
                $_SESSION["pswdError"] = 'Please Enter a Valid password !' ;
                header("index.php") ; 
              }
              else {
                $_SESSION["usname"] = $_POST["username"];
                $_SESSION["pswd"] = $_POST["password"];
                header("location: loginlogic.php");

              }
            }
            ?>

            </p>
          </div>

          <div class="form-group">
            <input class="form-control" type="password" name="password" placeholder="Password">
            <p style = "color:red">
            <?php
            if (isset($_POST['login'])){
              if (empty($_POST["password"])){
                echo $_SESSION["pswdError"];
            }
          }
          
            ?>
            </p>
          </div>
          <?php

          ?>

          <div class="form-group">
            <input class="btn btn-primary" type="submit" name="login" value="Login">
          </div>
        </form>
        <!-- ./login form -->
      </div>
      <div class="col-md-6">
        <h4>Don't have an account yet? Register!</h4>

        <!-- register form -->
        <?php
            // session_start();
            // require_once("connection.php");

            // if (isset($_POST['register'])){
            //   if (empty($_POST["regusername"])){
            //     $_SESSION["regusname"] = 'Please Enter a Valid UserName !' ;
            //     header("index.php") ; 
            //   }
            //   if (empty($_POST["regemail"])){
            //     $_SESSION["regemail"] = 'Please Enter a Valid E-Mail !' ;
            //     header("index.php") ; 
            //   }
            //   if (empty($_POST["regphno"])){
            //     $_SESSION["regphone"] = 'Please Enter a Valid Phone Number !' ;
            //     header("index.php") ; 
            //   }
            //   if (empty($_POST["reglocation"])){
            //     $_SESSION["regloca"] = 'Please Enter a Valid Location !' ;
            //     header("index.php") ; 
            //   }
            //   if (empty($_POST["regpassword"])){
            //     $_SESSION["regpswd"] = 'Please Enter a Valid Password !' ;
            //     header("index.php") ; 
            //   }
            //   else {
            //     // $_SESSION["usname"] = $_POST["username"];
            //     // $_SESSION["pswd"] = $_POST["password"];
            //     header("location: loginlogic.php");

              // }
            // }
            ?>
        <form method="post">
          <div class="form-group">  
            <input class="form-control" type="text" name="regusername" placeholder="Username">
            <p style = "color: red">
              <?php
              if (isset($_POST['register'])){
                if (empty($_POST["password"])){
                  echo "Enter a Valid Username !";
                  header("index.php");
                }
              }
              ?>
            </p>
          </div>

          <div class="form-group">
            <input class="form-control" type="text" name="regemail" placeholder="email">
          </div>

          <div class="form-group">
            <input class="form-control" type="text" name="regphno" placeholder="phone number">
          </div>

          <div class="form-group">
            <input class="form-control" type="text" name="reglocation" placeholder="Location">
          </div>

          <div class="form-group">
            <input class="form-control" type="password" name="regpassword" placeholder="Create Password">
          </div>

          <div class="form-group">
            <input class="btn btn-success" type="submit" name="register" value="Register">
          </div>
        </form>
        <!-- ./register form -->
      </div>
    </div>
  </main>
  <!-- ./main -->

  <!-- footer -->
  <footer class="container text-center">
    <ul class="nav nav-pills pull-right">
      <li>Fakebook - Made by Prathmesh</li>
    </ul>
  </footer>
  <!-- ./footer -->
  <script type="text/javascript" src="js/bootstrap.min.js"></script>
  <script type="text/javascript" src="js/script.js"></script>
</body>
</html>