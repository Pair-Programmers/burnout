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
            <a class="navbar-brand" href="#">
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
        <div class="col-sm-1" ></div>
        <div class="col-sm-10" style=" border: solid; height: 439px; margin-top: 40px; background-image: url('images/3.jpg');">
            
        </div>
        <div class="col-sm-1"></div>
    </div>

</body>
</html>