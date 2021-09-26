<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>

    <title>Abexle</title>
</head>
<body>
    
    <nav class="navbar" style="background-color: mediumturquoise ;height: 100px">

        <div class="col-sm-3">
            <a class="navbar-brand" href="{{ url('/') }}">
                 <img src="images/Capture.png" width="100" height="100" class="d-inline-block align-top" alt="">
                
            </a>
        </div>

        <div class="col-sm-9" style="text-align: right">
            <a class="navbar-brand" href="#">
                <b>Login</b>
            </a>  
            <a class="navbar-brand" href="{{ url('registration') }}">
                <b>Register</b>
            </a>  
        </div>
    </nav>
<!-- /////////////////////////////////////////////////////////////////////////////// -->

    <div class="row">
      <div class="col-md-4">
        <div class="col-sm-12" style="margin-top: 60px; text-align: center;">
          <a href="{{ url('/login') }}">
            <img src="images/employer.png" width="150" height="200">
            <h4 style="color: mediumturquoise">Employer</h4>
          </a>  

        </div>
        <div class="col-sm-12" style="margin-top: 35px;text-align: center;">
          <a href="{{ url('/employeelogin') }}">
            <img src="images/employee.png" width="150" height="200">
            <h4 style="color: mediumturquoise">Employee</h4>
          </a>
        </div>           
    </div>    
              
      <div class="col-md-5" style="margin-top: 100px; ">
        <h2>
                 Login as a Employee
        </h2>        
        
        <form>
          <div class="form-group">
            <label for="exampleInputcompany"><b>Company Name</b></label>
            <input type="text" class="form-control" id="exampleInputcompany" aria-describedby="companyName">
          </div>
          <div class="form-group">
            <label for="exampleInputEmail1"><b>Email address</b></label>
            <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
          </div>

          <div class="form-group">
            <label for="exampleInputPassword1"><b>Password</b></label>
            <input type="password" class="form-control" id="exampleInputPassword1">
          </div>
          <button type="submit" class="btn btn-primary">Login</button>
        </form>

      </div>
      
      
    
    </div>

</body>
</html>