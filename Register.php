
<!DOCTYPE html>
<html lang="en">
    


<head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
        <title>Register boolstrap</title>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
          integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
      </head>




<body>
    <div class="jumbotron text-center" style="margin-bottom:0">
        <h1>Welcome</h1>
        <h3>Register</h3>
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


<div class="container">
  <h2>Form Register</h2>

  <form action="/action_page.php" class="was-validated">
    <div class="form-group">
      <label for="usename">Username:</label>
      <input type="text" class="form-control" id="usename" placeholder="Enter username" name="usename" required>
      <div class="valid-feedback">Valid.</div>
      <div class="invalid-feedback">Please fill out this field.</div>
    </div>
    <div class="form-group">
      <label for="pwd">Password:</label>
      <input type="password" class="form-control" id="pass" placeholder="Enter password" name="pass" required>
      <div class="valid-feedback">Valid.</div>
      <div class="invalid-feedback">Please fill out this field.</div>
    </div>
    <div class="form-group">
      <label for="name">name:</label>
      <input type="text" class="form-control" id="name" placeholder="Enter name" name="name" required>
      <div class="valid-feedback">Valid.</div>
      <div class="invalid-feedback">Please fill out this field.</div>
    </div>
    <div class="form-group">
      <label for="surname">surname:</label>
      <input type="text" class="form-control" id="surname" placeholder="Enter surname" name="surname" required>
      <div class="valid-feedback">Valid.</div>
      <div class="invalid-feedback">Please fill out this field.</div>
    </div>

    <div class="form-group">
      <label for="Address">Address:</label>
      <input type="text" class="form-control" id="Address" placeholder="Enter Address" name="Address" required>
      <div class="valid-feedback">Valid.</div>
      <div class="invalid-feedback">Please fill out this field.</div>
    </div>
    
    <div class="form-group form-check">
      <label class="form-check-label">
        <input class="form-check-input" type="checkbox" name="remember" required> I agree on blabla.
        <div class="valid-feedback">Valid.</div>
        <div class="invalid-feedback">Check this checkbox to continue.</div>
      </label>
    </div>
    <button type="submit" class="btn btn-primary">Submit</button>
  </form>
</div>




</form>


<div class="jumbotron text-center" style="margin-bottom:0">
  <p>จัดทำโดย นาย ฮาริส มามะ รหัสนักศึกษา 624235009 คณะ วิทยาศาสตร์และเทคโนโลยี สาชา เทคโนโลยีสารสนเทศ</p>
</div>
</body>
</html>
