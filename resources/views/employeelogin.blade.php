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
         Login as a Employee
       </h2>        

       <form action="employeeLogin">

        <div class="form-group">
          <label for="exampleInputcompany"><b>Employer Username / ID</b></label>
          <input type="text" class="form-control" id="employer_user_name" name="employer_user_name" required>
        </div>

        <div class="form-group">
          <label for="exampleInputEmail1"><b>Employer Username / ID</b></label>
          <input type="text" class="form-control" id="user_name" name="user_name" aria-describedby="emailHelp" required>
        </div>

        <div class="form-group">
          <label for="exampleInputPassword1"><b>Password</b></label>
          <input type="password" class="form-control" id="password" name="password" required>
          <label style="color: red"><?php if (isset($_SESSION['message'])) {
            echo $_SESSION['message'];
          } ?> </label>

        </div>

        <button type="submit" class="btn btn-primary">Login</button>

      </form>

    </div>
    
  </div>
</div>
</body>
</html>