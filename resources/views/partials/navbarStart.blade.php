<nav class="navbar" style="background-color: rgb(127, 195, 212); height: 100px">

    <div class="col-sm-3">
        <a class="navbar-brand" href="{{ url('/') }}">
           <img src="images/Capture.png" width="100" height="100" class="d-inline-block align-top" alt="">

       </a>
   </div>

   <div class="col-sm-9" style="text-align: right">
        <a class="navbar-brand" href="{{ url('login') }}">
            <b>Login</b>
        </a>  
        <a class="navbar-brand" href="{{ url('registration') }}">
            <b>Register</b>
        </a>  
    </div>
    
</nav>