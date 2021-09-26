<!DOCTYPE html>
<html>
<head>
  @include('partials/head')

  <title>Abexle</title>
</head>
<body>

  @include('partials/navbarStart')

  <div class="container-fluid">
    <div class="row">

      <div class="col-md-4">

        <div class="col-sm-12" style="margin-top: 40px; text-align: center;">
          <a href="{{ url('/login') }}">
            <img src="images/employer.png" width="200" height="200">
            <h4 style="color: mediumturquoise">Employer</h4>
          </a>  
        </div>

        <div class="col-sm-12" style="margin-top: 30px;text-align: center;">
          <a href="{{ url('/employeelogin') }}">
            <img src="images/employee.png" width="170" height="200">
            <h4 style="color: mediumturquoise">Employee</h4>
          </a>
        </div>   

      </div>   

      <div class="col-md-5" style="margin-top: 100px; ">
        <h2>
         Login as a Employer
        </h2>

       <form action="employerLogin">

        <div class="form-group">
          <label for="exampleInputId"><b>Employer Username / ID</b></label>
          <input type="text" class="form-control" id="user_name" name="user_name" aria-describedby="id" required>          
        </div>

        <div class="form-group">
          <label for="exampleInputPassword1"><b>Password</b></label>
          <input type="password" class="form-control" id="password" name="password" required>

          <label style="color: red"><?php $message = "";if (!isset($_SESSION['message_login'])) ;else echo $_SESSION['message_login'];?> </label>
        </div>

        <button type="submit" class="btn btn-primary">Login</button>

      </form>
      
      </div>
      <div class="col-md-3"></div>
    </div>
  </div>
</body>
</html>