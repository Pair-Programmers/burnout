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
            <a class="navbar-brand" href="{{ url('/') }}">
                <b>Sign Out</b>
            </a>  
        </div>
    </nav>

    <div class="row">
      <div class="col-sm-3"></div>

      <div class="col-sm-6" style="text-align: center;">
        <div class="btn-group" style="margin-top: 50px; text-align: center">
          <button type="button" class="btn btn-primary">Individual</button>
          <button type="button" class="btn btn-primary">Organization</button>
          <button type="button" class="btn btn-primary">History</button>
        </div>
      </div>
      
      <div class="col-sm-3"></div>  
    </div>  
              
  <div class="container" style="margin-top: 20px">
  
    <table class="table">
        <thead>
      <tr>
        <th scope="col">Employees ID</th>
        <th scope="col">Name</th>
        <th scope="col">Meaninglessness</th>
        <th scope="col">Exhaustion</th>
        <th scope="col">Demotivation</th>
        <th scope="col">Average Results</th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <th scope="row">1</th>
        <td>Abeer</td>
        <td></td>
        <td></td>
      </tr>
      <tr>
        <th scope="row">2</th>
        <td>Maham</td>
        <td></td>
        <td></td>
      </tr>
      <tr>
        <th scope="row">3</th>
        <td>Shehzadi</td>
        <td></td>
        <td></td>
      </tr>
    </tbody>
   </table>      
  </div>
</body>
</html>

