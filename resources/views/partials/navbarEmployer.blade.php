<nav class="navbar" style="background-color: rgb(127, 195, 212); height: 100px">

  <div class="col-sm-1">
    <a class="navbar-brand" href="{{ url('/') }}">
     <img src="images/Capture.png" width="100" height="100" class="d-inline-block align-top" alt="">
    </a>
  </div>

  <div class="col-sm-2">
    <b><?php echo $_SESSION['company_name']; ?></b>
  </div>
  
  <div class="col-sm-6">

    <a class="navbar-brand" href="{{ url('employerHome1') }}">
      <b>&nbsp;&nbsp; Results</b>
    </a>  
    <a class="navbar-brand" href="{{ url('employerHome2') }}">
      <b>Employees</b>
    </a>  
  </div>

  <div class="col-sm-3" style="text-align: right">
    <a class="navbar-brand" href="{{ url('employerProfile') }}">
      <b>Profile</b>
    </a>  
    <a class="navbar-brand" href="{{ url('signout') }}">
      <b>Sign Out</b>
    </a>  
  </div>

</nav>