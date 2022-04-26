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
            <a class="navbar-brand" href="{{ url('/login') }}">
                <b>Login</b>
            </a>  
            <a class="navbar-brand" href="{{ url('registration') }}">
                <b>Register</b>
            </a>  
        </div>
    </nav>

    <div class="row">
      <div class="col-md-3"></div>
      <div class="col-md-6" style="margin-top: 50px; ">
         <h2>
                 Register your Company
        </h2> 
        <form style="margin-top: 15px;">
          <div class="form-group">
            <label for="exampleInputcompany">Company Name</label>
            <input type="text" class="form-control" id="exampleInputcompany" aria-describedby="companyName">
            <small id="companyName" class="form-text text-muted">We'll never share your company info with anyone else.</small>
          </div>
          <div class="form-group">
            <label for="exampleInputEmployer">Employer ID</label>
            <input type="text" class="form-control" id="exampleInputEmployer" aria-describedby="employerName">
          </div>
          <div class="form-group">
            <label for="exampleInputEmail1">Email address</label>
            <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
            <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
          </div>

          <div class="form-group">
            <label for="exampleInputPassword1">Password</label>
            <input type="password" class="form-control" id="exampleInputPassword1">
          </div>
          <div class="form-group">
            <label for="exampleInputPassword1">Confirm Password</label>
            <input type="password" class="form-control" id="exampleInputPassword1">
          </div>
          
          <button type="submit" class="btn btn-primary">Submit</button>
        </form>

      </div>
      <div class="col-md-3"></div>
    </div>

</body>
</html>