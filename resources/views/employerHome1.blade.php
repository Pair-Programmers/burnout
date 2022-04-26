<!DOCTYPE html>
<html>
<head>
    @include('partials/head')

    <title>Abexle</title>
</head>
<body>
    
    @include('partials/navbarEmployer')

    <div class="container-fluid">
      <div class="row">
        <div class="col-sm-3"></div>
        <div class="col-sm-6">
          <div class="btn-group col-lg-12" role="group" aria-label="Basic example" style=" margin-top: 30px; margin-bottom: 30px">
            <a href="{{ url('individualResultView') }}" class="btn" style="background-color: rgb(54, 152, 209); margin-right: 5px">Individual</a>
            <a href="{{ url('organizationResultView') }}" class="btn" style="background-color: rgb(54, 152, 209); margin-right: 5px">Organization</a>
            <a href="{{ url('history') }}" class="btn" style="background-color: rgb(54, 152, 209)">History</a>


          </div> 
       </div>
     </div>

     <div class="row">
        <div class="col-sm-3"></div>
        <div class="col-sm-6" style="margin-top: 50px; margin-left: 20px">
          <h2 >Select one of the result to show !</h2>
       </div>
     </div>
    </div>

</body>
</html>
