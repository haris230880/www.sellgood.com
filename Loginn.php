

<!doctype html>
<html >

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

  <h2 ALIGN="CENTER"> Login</h2>

  <div class="container">
  <form  method="get" action="Logout.php" > 
    <div class="mb-3">
      <label for="exampleInputEmail1" class="form-label">email</label>
      <input type="text" name = usename class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
    
      <label for="exampleInputPassword1" class="form-label">Password</label>
      <input type="password"  name="pass" class="form-control" id="exampleInputPassword1">
    </div>
    <span id="passwordHelpInline" class="form-text">
      Must be 8-20 characters long.
    </span><br>



    <div class="mb-3 form-check">
      <input type="checkbox" class="form-check-input" id="exampleCheck1">
      <label class="form-check-label" for="exampleCheck1">Check me out</label>
    </div>
    <button type="submit" class="btn btn-primary">ยืนยัน</button>
    <button type="reset" class="btn btn-primary">ยกเลิก</button><br><br>
   
  </form>


  <div class="jumbotron text-center" style="margin-bottom:0">
    <p>จัดทำโดย นายฮาริส มามะ รหัสนักศึกษา 624235009 คณะวิทยาศาสตร์และเทคโนโลยี สาขาเทคโนโลยีสารสนเทศ</p>
  </div>
</body>
</html>