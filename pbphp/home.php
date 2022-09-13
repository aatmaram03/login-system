<!DOCTYPE html>
<html>
<head>
  <title>Facebook</title>

  <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
  <link rel="stylesheet" type="text/css" href="css/style.css">
</head>
<body>
  <!-- nav -->
  <nav class="navbar navbar-default">
    <div class="container-fluid">
      <div class="navbar-header">
        <a class="navbar-brand" href="home.php">Fakebook</a>
      </div>
      <ul class="nav navbar-nav navbar-right">
        <li><a href="profile.php">Profile</a></li>
        <li><a href="index.php">Logout</a></li>
      </ul>
    </div>
  </nav>
  <!-- ./nav -->

  <!-- main -->
  <main class="container">
    <div class="row">
      <div class="col-md-3">
        <!-- profile brief -->
        <div class="panel panel-default">
          <div class="panel-body">
            <h4>
              <?php
                session_start();
                require_once("connection.php");
                $name = $_SESSION['username'];
                $flag = 0;
                

                if(str_contains($name,"@")) $flag = 1;
                

                if($flag == 1){
                  $sql = "SELECT * FROM logdata WHERE email='$name'";
                }
                else{
                  $sql = "SELECT * FROM logdata WHERE usname='$name' or phno='$name' ";
                }

                $result = $con->query($sql);
                while($row = $result->fetch_assoc()) {
                  if($name == $row['email'] or $row['phno'] or $row['usname']){
                    echo $row['usname'];
                    $_SESSION['profileName'] = $row['usname'];
                  }
                }
                ?>


            </h4>
            <p>I love to code!</p>
          </div>
        </div>
        <!-- ./profile brief -->

        <!-- friend requests -->
        <!-- <div class="panel panel-default">
          <div class="panel-body">
            <h4>friend requests</h4>
            <ul>
              <li>
                <a href="#">johndoe</a> 
                <a class="text-success" href="#">[accept]</a> 
                <a class="text-danger" href="#">[decline]</a>
              </li>
            </ul>
          </div>
        </div> -->
        <!-- ./friend requests -->
      </div>
      <div class="col-md-6">
        <!-- post form -->
        <form method="post" action="">
          <div class="input-group">
            <input class="form-control" type="text" name="content" placeholder="Make a post...">
            <span class="input-group-btn">
              <button class="btn btn-success" type="submit" name="post">Post</button>
            </span>
          </div>
        </form><hr>
        <!-- ./post form -->

        <!-- feed -->
        <div>
          <!-- post -->
          <div class="panel panel-default">
            <div class="panel-body">
              <p>Hello people! This is my first FaceClone post. Hurray!!!</p>
            </div>
            <div class="panel-footer">
              <span>posted 2017-5-27 20:45:01 by user696969</span> 
              <span class="pull-right"><a class="text-danger" href="#">[delete]</a></span>
            </div>
          </div>
          <!-- ./post -->
        </div>
        <!-- ./feed -->
      </div>
      <div class="col-md-3">
      
        <!-- <div class="panel panel-default"> -->
          <!-- <div class="panel-body"> -->
            <!-- <h4>add friend</h4> -->
            <!-- <ul> -->
              <!-- <li> -->
                <!-- <a href="#">alberte</a>  -->
                <!-- <a href="#">[add]</a> -->
              <!-- </li> -->
            <!-- </ul> -->
          <!-- </div> -->
        <!-- </div> -->
      

        <!-- friends -->
        <div class="panel panel-default">
          <div class="panel-body">
            <h4>Fakebook Users: </h4>
            <ul>
              <li>
                <p>peterpan</p> 
                
              </li>
            </ul>
          </div>
        </div>
        <!-- ./friends -->
      </div>
    </div>
  </main>
  <!-- ./main -->

  <!-- footer -->
  <footer class="container text-center">
    <ul class="nav nav-pills pull-right">
      <li>FaceClone - Made by Prathmesh</li>
    </ul>
  </footer>
  <!-- ./footer -->
  <script type="text/javascript" src="js/bootstrap.min.js"></script>
  <script type="text/javascript" src="js/script.js"></script>
</body>
</html>