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
            <div class="col col-8 col-sm-8 col-md-8">
                <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
                    <div class="carousel-inner">
                      <div class="carousel-item active">
                        <img src="./images/1.jpg" class="d-block w-100" alt="...">
                      </div>
                      <div class="carousel-item">
                        <img src="./images/2.jpg" class="d-block w-100" alt="...">
                      </div>
                      <div class="carousel-item">
                        <img src="./images/3.jpg" class="d-block w-100" alt="...">
                      </div>
                    </div>
                    <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
                      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                      <span class="sr-only">Previous</span>
                    </a>
                    <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
                      <span class="carousel-control-next-icon" aria-hidden="true"></span>
                      <span class="sr-only">Next</span>
                    </a>
                  </div> 
            
            </div>
        
            
            <div class="col col-4 col-sm-4 col-md-4">
                <table class="table table-borderless">
                    <tr>
                        <td>User Name</td>
                        <td><input type="text" class="form-control" placeholder="Enter User Name"></td>
                    </tr>
                    <tr>
                        <td>Password</td>
                        <td><input type="password" class="form-control" placeholder="Enter password"></td>
                        <td></td>
                    </tr>
                    <tr class="bg-dark text-white">
                        <td>Personal Details</td>
                        <td></td>
                        <td></td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>Name</td>
                        <td><input type="text" class="form-control" placeholder="First Name"></td>
                        <td><input type="text" class="form-control" placeholder="Second Name"></td>
                        <td><input type="text" class="form-control" placeholder="Last Name"></td>
                    </tr>
                    <tr>
                        <td>Gender</td>
                        <td><input type="radio" class="form-check-input" name="gender">Male</td>
                         <td><input type="radio" class="form-check-input" name="gender">Female</td>
                         <td><input type="radio" class="form-check-input" name="gender">Transgender</td>
                    </tr>
                    <tr>
                        <td>D.O.B</td>
                        <td><input type="date" name="" id=""></td>
                    </tr>
                    <tr>
                        <td>email</td>
                        <td><input type="text" class="form-control"></td>
                    </tr>
                    <tr>
                        <td>Mobile No.</td>
                        <td><input type="text" class="form-control"></td>
                    </tr>
                    <tr>
                        <td>Address</td>
                        <td><textarea class="form-control" rows="5" id="comment"></textarea></td>
                    </tr>
                    <tr>
                        <td><input type="checkbox" class="form-check-input" value="">I agree all the terms and conditions</td>
                    </tr>
                    <tr>
                        <td></td>
                        <td></td>
                       <td> <center><button class="btn btn-success">Register</button></center>
                       </td>
                      <td> <a href="login.php">already has an account</a></td>
                    </tr>
                </table>
            </div>
        </div>
    </div>
    

    
      <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
</body>
</html>