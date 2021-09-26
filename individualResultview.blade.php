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
    
    <nav class="navbar" style="background-color: mediumturquoise ;height: 150px ; width: 100%">

        <div class="col-sm-3">
            <a class="navbar-brand" href="{{ url('/') }}">
                 <img src="images/Capture.png" width="100" height="100" class="d-inline-block align-top" alt=" ">
                
            </a>
        </div>

        <div class="col-sm-9" style="text-align: right">
            <a class="navbar-brand" href="{{ url('') }}">
                <b>View Result </b>
            </a>  
            <a class="navbar-brand" href="{{ url('/') }}">
                <b>Sign Out</b>
            </a>  
        </div>
    </nav>
   
<div class="row">
      <div class="col-sm-3"></div>
      <div class="col-sm-6">
        <div style="text-align: center; margin-top: 10%; margin-bottom: 10%">
          <a href="{{ url('individualResultView') }}"><button type="button" class="btn btn-success btn-lg">Individual</button></a>
          <a href="{{ url('organizationResultView') }}"><button type="button" class="btn btn-warning btn-lg">Organization</button></a>
          <a href="{{ url('deleteEmployee') }}"><button type="button" class="btn btn-danger btn-lg">History</button></a>
         
        </div>

<form>
    <div class="form">
            <label for="exampleInputEmployer">Employer ID</label>
            <input type="text" class="form-control" id="exampleInputEmployer" aria-describedby="employerName">
          </div>
          <div class="form">
            <label for="exampleInputemplyee"> Name </label>
            <input type="text" class="form-control" id="exampleInputcompany" aria-describedby="companyName">
          </div>
          
          <div class="form">
            <label for="exampleInputDesignation"> Designation</label>
            <input type="text" class="form-control" id="exampleInputDesination" aria-describedby="emailHelp">
          </div>
       </form>
     </div>
       
       <div class="container" style="margin-top: 30px">
        <h3>
          Result
        </h3>
  
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
        <td>Fatima</td>
        <td></td>
      </tr>
    </tbody>
   </table>      
  </div>
</body>
</html>
