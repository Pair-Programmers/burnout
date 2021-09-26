<nav class="navbar" style="background-color: rgb(127, 195, 212); height: 100px">

  <div class="col-sm-1">
    <a class="navbar-brand" href="#">
      <img src="images/Capture.png" width="100" height="100" class="d-inline-block align-top" alt="">
    </a>
    
  </div>

  <div class="col-sm-2">
    <a class="navbar-brand">
   <b><?php echo $_SESSION['company_name']; ?> &nbsp;&nbsp;&nbsp;&nbsp;</b>
  </a>  

  </div>

  <div class="col-sm-4">
   <a class="navbar-brand" href="{{ url('/survey') }}">
    <b>Fill Survey</b>
  </a>  
  </div>

  <div class="col-sm-5" style="text-align: right">
    <b><?php echo $_SESSION['user_name']; ?> &nbsp;&nbsp;&nbsp;&nbsp;</b>
    <a class="navbar-brand" href="{{ url('employeeProfile') }}">
      <b> My profile</b>
    </a>  
    <a class="navbar-brand" href="{{ url('signout') }}">
      <b>signout</b>
    </a>  
  </div>
  
</nav>