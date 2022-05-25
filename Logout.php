



<html>
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
  <title>Login boolstrap</title>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
    integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
</head>

<body>

  <div class="jumbotron text-center" style="margin-bottom:0">
    <h1>Welcome</h1>
    <h3>www.sellgood.com</h3>
  </div>
  <nav class="navbar navbar-expand-sm bg-dark navbar-dark">
        <a class="navbar-brand" href="home.php">home</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="collapsibleNavbar">
          <ul class="navbar-nav">
            <li class="nav-item">
              <a class="nav-link" href="Register.php">Register</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="Loginn.php">Login</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="Logout.php">Log out</a>
              </li>
            
          </ul>
        </div>
      </nav>

<body>
<FROM ALIGN="CENTER">
<h3><br>Usename is: <?php echo $usename = $_GET["usename"]; ?><br></h3>
<h3>Password is: <?php echo $pass =  $_GET["pass"]; ?><br></H3>
</form>

<div class="container"ALIGN="CENTER">
      <a Type= "button" class="btn btn-outline-success" href="Loginn.php">Login</a>
      <a Type= "button" class="btn btn-outline-danger" href="Logout.php">Logout</a><br><br>
      <a Type= "button" class="btn btn-dark" href="condb.php">data</a>

    
</div>




</body><br><br><br><br><br>
<div class="jumbotron text-center" style="margin-bottom:0">
    <p>จัดทำโดย นายฮาริส มามะ รหัสนักศึกษา 624235009 คณะวิทยาศาสตร์และเทคโนโลยี สาขาเทคโนโลยีสารสนเทศ</p>
  </div>

</html>