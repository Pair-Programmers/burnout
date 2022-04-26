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

        <h4 style="text-align:  center; margin-bottom: 20px">Disable / Enable Emplyee</h4>

        <form style="font-weight: bold;" action="disableOrEnableEmployee">

          <div class="row" style="margin-bottom: 20px">
            
            <div class="col-sm-10">
              <input type="text" class="form-control" id="user_name" name="user_name"  aria-describedby="employerName" placeholder="search for ID">
            </div>
            
            <div class="col-sm-2" style="text-align: right;">
              <button type="button" class="btn btn-warning" onclick="showEmployee()">Search</button>
            </div>

          </div>
          
          <div class="form-group row">

           <div class="col-sm-6">
            <label for="exampleInputDate">Full Name</label>
            <input type="Name" class="form-control" id="full_name" name="full_name" placeholder=" Full Name" readonly="true">
          </div>

          <div class="col-sm-6">
            <label for="exampleInputDate">Status</label>
            <select class="form-control" id="status" name="status">
             <label for="exampleInputDesignation">Status</label>
             <option>Disable</option>
             <option>Enable</option>

           </select>
         </div>

       </div>

       <div class="form-group row">

        <div class="col-sm-6">
          <label for="exampleInputDate">Date of Birth</label>
          <input type="Date" class="form-control" id="dob" name="dob" placeholder="Date of Birth" readonly="true" >
        </div>

        <div class="col-sm-6">
          <label for="exampleInputDate">Starting Date</label>
          <input type="Date" class="form-control" id="starting_date" name="starting_date" placeholder="Starting Date" readonly="true">
        </div>

      </div>

      <div class="form-group row">

       <div class="col-sm-6">
         <label for="exampleInputDate">Designation</label>
         <select class="form-control" id="designation" name="designation" readonly="true">
           <label for="exampleInputDesignation">Designation</label>
           <option>Senior Manager</option>
           <option>Supervisor/Team Leader</option>
           <option>Senior Developer</option>
           <option>Developer</option>
           <option>Other</option>            
         </select>
       </div>

       <div class="col-sm-6" style="margin-top: 36px" id="genderRadio" >
        <label for="exampleInputDate"> Gender &nbsp; &nbsp; </label>

        <div class="form-check form-check-inline">
          <input class="form-check-input" type="radio" name="gender" id="gender" checked value="Male" readonly="true">
          <label class="form-check-label" for="inlineRadio2">Male</label>
        </div>

        <div class="form-check form-check-inline">
          <input class="form-check-input" type="radio" name="gender" id="gender" value="Female" readonly="true">
          <label class="form-check-label" for="inlineRadio2" >Female</label>
        </div>

      </div>
    </div>




    <div class="form-group">

    </div>

    <div class="form-group row">

      <div class="col-sm-6">
        <label for="exampleInputDate">Education</label>

        <select class="form-control" id="education" name="education" readonly="true">
          <label for="exampleInputDesignation">Education</label>
          <option>Intermediate</option>
          <option>Graduation</option>
          <option>Master</option>
          <option>Engineering</option>
          <option>Other(Diploma)</option>
        </select>
      </div>

      <div class="col-sm-6">
        <label for="exampleInputDate">Experience in Field</label>
        <select class="form-control" id="experience" name="experience" readonly="true">
          <label for="exampleInputDesignation">Experience</label>
          <option>No Experience</option>
          <option>1 - 2 year</option>
          <option>3 - 4 year</option>
          <option>5 - 6 year</option>
          <option>7 - 8 year</option>
          <option>9 - 10 year</option>
        </select>
      </div>



    </div>

    <div class="form-group row">

      <div class="col-sm-6">
        <label >Email</label>
        <input type="email" class="form-control" id="email" name="email" placeholder="Password" readonly="true">
      </div>

    </div>

    <div class="form-group row">

      <div class="col-sm-6">
        <label for="exampleInputDate">Password</label>
        <input type="password" class="form-control" id="password" name="password" placeholder="Password" readonly="true">
      </div>

      <div class="col-sm-6">
        <label for="exampleInputDate">Confirm Password</label>
        <input type="password" class="form-control" id="confirm_pasword" name="confirm_pasword" placeholder="Confirm Password" readonly="true">
      </div>



      </div>

      <div style="text-align: Right";>
        <button type="submit" class="btn btn-primary">Submit</button>
      </div>
    </form>
  </div>
  </div>


  </div>
</body>
</html>

<script type="text/javascript">
  
  function showEmployee(){
    
    var searchBar = document.getElementById("user_name");
    searchBarID = searchBar.value;

    $.ajax({
      url: '{{('searchEmployee')}}/' + searchBarID,
      type: 'get',
      success: function(response){
        if (response.message != 'ERROR')
        {
          /*adding data to inputs tags of form by thier name*/
          $("#full_name").val(response[0].full_name);
          $("#dob").val(response[0].dob);
          $("#starting_date").val(response[0].starting_date);
          $("#designation").val(response[0].designation);
          if (response[0].gender == 'Male')
            $('#genderRadio').find(':radio[name=gender][value="Male"]').prop('checked', true);
          else
            $('#genderRadio').find(':radio[name=gender][value="Female"]').prop('checked', true);
          $("#education").val(response[0].education);
          $("#experience").val(response[0].experience);
          $("#status").val(response[0].status);
          $("#email").val(response[0].email);
          $("#password").val(response[0].password);
          $("#confirm_pasword").val(response[0].password);
        }

        }
      });
  }
  
</script>