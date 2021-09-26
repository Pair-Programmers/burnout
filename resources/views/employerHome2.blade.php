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
           <a href="{{ url('addEmployee') }}" class="btn " style="background-color: rgb(54, 152, 209); margin-right: 5px">Add Employee</a>
        <a href="{{ url('updateEmployee') }}" class="btn " style="background-color: rgb(54, 152, 209); margin-right: 5px">Update Employee</a>
        <a href="{{ url('deleteEmployee') }}" class="btn " style="background-color: rgb(54, 152, 209);">Disable / Enable</a>
          </div> 
       </div>
     </div>

     <div class="row">
        <div class="col-sm-3"></div>
        <div class="col-sm-6" style="margin-top: 50px; margin-left: 20px">
          <h2 >Select one of the option !</h2>
       </div>
     </div>
    </div>
    </div>

</body>
</html>
