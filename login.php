<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="css/style.css">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
</head>
<body class="c">
    <nav class="navbar navbar-expand-sm bg-light navbar-light">
        <ul class="navbar-nav">
          <li class="nav-item active">
            <a class="nav-link" href="index.php">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="register.php">Register</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="login.php">Login</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="contact.php">Contact Us</a>
          </li>
        </ul>
      </nav>
      <div class="container">
          <div class="row">
              <div class="col col-12 col-sm-6 col-md-6">
                <table class="table table-borderless">
                  <tr>
                      <td>user name</td>
                      <td><input type="text" class="form-control"></td>
                  </tr>
                  <tr>
                      <td>password</td>
                      <td><input type="password" class="form-control"></td>
                  </tr>
                  <br>
                  <tr>
                      <td>
                          <button class="btn btn-success">Sign in</button>
                      </td>
                      <td><a href="register.php">Not registered?</a></td>
                  </tr>

                </table>
              </div>
          </div>
      </div>
    
</body>
</html>