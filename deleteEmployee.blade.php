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
            <a class="navbar-brand" href="#">
                <b>Login</b>
            </a>  
            <a class="navbar-brand" href="{{ url('registration') }}">
                <b>Register</b>
            </a>  
        </div>
    </nav>
    
    <div class="row">
      <div class="col-sm-3"></div>
      <div class="col-sm-6">
        <div style="text-align: center; margin-top: 10%; font-size: 200%; margin-bottom: 10%">
          <a href="{{ url('addEmployee') }}"><button type="button" class="btn btn-success btn-lg">Add</button></a>
          <a href="{{ url('updateEmployee') }}"><button type="button" class="btn btn-warning btn-lg">Update</button></a>
          <a href="{{ url('deleteEmployee') }}"><button type="button" class="btn btn-danger btn-lg">Delete</button></a>
         
        </div>

        <form style="font-weight: bold;">
          <label style="font-weight: bolder;" for="deleteEmployee">Delete Employee:</label>
          <div class="form-group">
            <label for="exampleInputid">ID</label>
           <select class="form-control">
             <label for="exampleInputDesignation">ID</label>
             <option>1</option>
             <option>2</option>
             <option>3</option>
             <option>4</option>
             <option>5</option>            
             </select>
          </div>
          <div class="form-group">
            <label for="exampleInputName">Name</label>
            <input type="Name" class="form-control" id="exampleInputName">
          </div>


          <div class="form-group">
            <label for="exampleInputDob">DOB</label>
            <input type="Date" class="form-control" id="exampleInputDate">
          </div>
          
          <div class="form-group">
            <label for="exampleInputDate">Starting Date</label>
            <input type="Date" class="form-control" id="exampleInputDate">
          </div>
          
          <div class="form-group">
             <label for="exampleInputDesignation">Designation</label>
             <select class="form-control">
             <label for="exampleInputDesignation">Designation</label>
             <option>Senior Manager</option>
             <option>Supervisor/Team Leader</option>
             <option>Senior Developer</option>
             <option>Developer</option>
             <option>Other</option>            
             </select>
          </div>
         
          <div class="form-group">
            <label for="exampleInputDate">Gender</label>
          
            <div class="form-check form-check-inline">
               <input class="form-check-input" type="checkbox" id="inlineCheckbox1" value="option1">
               <label class="form-check-label" for="inlineCheckbox1">Male</label>
            </div>

            <div class="form-check form-check-inline">
              <input class="form-check-input" type="checkbox" id="inlineCheckbox2" value="option2">
              <label class="form-check-label" for="inlineCheckbox2">Female</label>
            </div>
          </div>
           <div class="form-group">
              <label for="exampleInputDate">Education</label>

              <select class="form-control">
                <label for="exampleInputDesignation">Education</label>
                <option>Intermediate</option>
                <option>Graduation</option>
                <option>Master</option>
                <option>Engineering</option>
                <option>Other(Diploma)</option>
              </select>

            </div>
          <div class="form-group">
            <label for="exampleInputEmail1">Experience in Field</label>
            <input type="id" class="form-control" id="exampleInputid">
           
          </div>
  
          <div style="text-align: right";>
          <button type="button" class="btn btn-primary">Delete</button>
          </div>
        </form>
      </div>
    </div>



</body>
</html>