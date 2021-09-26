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

        <h4 style="text-align:  center; margin-bottom: 20px">Update Emplyee</h4>

        <form style="font-weight: bold;" action="UpdateEmployee" id="myForm1">

          <div class="row" style="margin-bottom: 20px">
            <div class="col-sm-10">
              <input type="text" class="form-control" id="user_name" name="user_name" aria-describedby="employerName" placeholder="search for ID">
            </div>
            <div class="col-sm-2" style="text-align: right;">
              <button type="button" class="btn btn-warning" onclick="showEmployee()">Search</button>
            </div>
            
            
          </div>
          
          <div class="form-group row">
           
           <div class="col-sm-6">
            <label for="exampleInputDate">Full Name</label>
            <input type="text" class="form-control" id="full_name" name="full_name" placeholder=" Full Name" pattern="[A-Za-z ]{5,25}" title="Alphabets Only, min 5, max 25" required onkeyup="validateFullName()">
            <label style="color: red" id="full_name_label"></label>
          </div>
        </div>
        


        <div class="form-group row">
          <div class="col-sm-6">
            <label for="exampleInputDate">Date of Birth</label>
            <input type="Date" class="form-control" id="dob" name="dob" placeholder="Date of Birth" required onkeyup="validateDOB()">
            <label style="color: red" id="dob_label"></label>
          </div>
          <div class="col-sm-6">
            <label for="exampleInputDate">Starting Date</label>
            <input type="Date" class="form-control" id="starting_date" name="starting_date" placeholder="Starting Date" required onkeyup="validateStartingDate()">
            <label style="color: red" id="starting_date_label"></label>
          </div>

          
        </div>
        
        <div class="form-group row">
         <div class="col-sm-6">
           <label for="exampleInputDate">Designation</label>
           <select class="form-control" id="designation" name="designation">
             <label for="exampleInputDesignation">Designation</label>
             <option>Senior Manager</option>
             <option>Supervisor/Team Leader</option>
             <option>Senior Developer</option>
             <option>Developer</option>
             <option>Testor</option>
             <option>Designer</option>
             <option>Other</option>            
           </select>
         </div>
         <div class="col-sm-6" style="margin-top: 36px" id="genderRadio">
          <label for="exampleInputDate"> Gender &nbsp; &nbsp; </label>
          
          <div class="form-check form-check-inline">
            <input class="form-check-input" type="radio" name="gender" id="gender" checked value="Male">
            <label class="form-check-label" for="inlineRadio2">Male</label>
          </div>

          <div class="form-check form-check-inline">
            <input class="form-check-input" type="radio" name="gender" id="gender" value="Female">
            <label class="form-check-label" for="inlineRadio2">Female</label>
          </div>

        </div>
      </div>
      
      
      
      
      <div class="form-group">
        
      </div>
      
      <div class="form-group row">
        <div class="col-sm-6">
          <label for="exampleInputDate">Education</label>

          <select class="form-control" id="education" name="education">
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
          <select class="form-control" id="experience" name="experience">
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
          <input type="email" class="form-control" id="email" name="email" required readonly="true">
          <label style="color: red" ><?php if (isset($_SESSION['message_email'])) {
            echo $_SESSION['message_email'];
          } ?></label>
        </div>
        
      </div>

      
      <div class="form-group row">
        <div class="col-sm-6">
          <label for="exampleInputDate">Password</label>
          <input type="password" class="form-control" id="password" name="password" required readonly="true" minlength="5" maxlength="15" onkeyup="validatePassword()">
          <label style="color: red" id="password_label"></label>
        </div>
        <div class="col-sm-6">
          <label for="exampleInputDate">Confirm Password</label>
          <input type="password" class="form-control" id="confirm_pasword" name="confirm_pasword" required readonly="true" minlength="5" maxlength="15" onkeyup="validateConfirmPassword()">
          <label style="color: red" id="confirm_password_label"></label>
        </div>
        
        
        
      </div>
      
      <div style="text-align: Right";>
        <button type="button" onclick="validateForm()" class="btn btn-primary">Submit</button>
      </div>
    </form>
  </div>
</div>


</div>
</body>
</html>

<script type="text/javascript">
  function showEmployee(){
    console.log("hamza");
    var searchBar = document.getElementById("user_name");
    searchBarID = searchBar.value;
    console.log(searchBarID);
    $.ajax({
      url: '{{('searchEmployee')}}/' + searchBarID,
      type: 'get',
      success: function(response){
        if (response.message != 'ERROR')
        {
          $("#full_name").val(response[0].full_name);
          $("#dob").val(response[0].dob);
          $("#starting_date").val(response[0].starting_date);
          $("#designation").val(response[0].designation);
          if (response[0].gender == 'Male')
            $('#genderRadio').find(':radio[name=gender][value="Male"]').prop('checked', true);
          else
            $('#genderRadio').find(':radio[name=gender][value="Female"]').prop('checked', true);
            // $("#gender").val(response[0].gender);
            $("#education").val(response[0].education);
            $("#experience").val(response[0].experience);
            $("#email").val(response[0].email);
            $("#password").val(response[0].password);
            $("#confirm_pasword").val(response[0].password);
          }

        }
      });
  }

  
  var isFullNameValidate = true;
  //var isUserNameValidate = false;
  //var isEmailValidate = false;
  var isPasswordValidate = true;
  var isDOBValidate = true;
  var isStartingDateValidate = true;
  

  function validateFullName() {
    var fullName = document.getElementById("full_name");
    var pattern = /^[A-Za-z ]+$/;
    if(pattern.test(fullName.value)){
      if(fullName.value.length > 5 && fullName.value.length < 25)
      {
        isFullNameValidate = true;
        document.getElementById('full_name_label').innerHTML = '';
      } else {
        document.getElementById('full_name_label').innerHTML = 'Invalid, hint: max 25, min 6, no special character';
        isFullNameValidate = false;
      }
    } else {
      document.getElementById('full_name_label').innerHTML = 'Invalid, hint: max 25, min 6, no special character';
      isFullNameValidate = false;
    }
  }

  function validateDOB() {
    var dob = document.getElementById("dob");
    if (dob.value.length == 10) {
      isDOBValidate = true;
      document.getElementById('dob_label').innerHTML = '';
    } else {
      isDOBValidate = false;
      document.getElementById('dob_label').innerHTML = 'Invalid Date';
    }
  }

  function validateStartingDate() {
    var startingDate = document.getElementById("starting_date");
    if (startingDate.value.length == 10) {
      isStartingDateValidate = true;
      document.getElementById('starting_date_label').innerHTML = '';
    } else {
      isStartingDateValidate = false;
      document.getElementById('starting_date_label').innerHTML = 'Invalid Date';
    }
  }

  function validateUserName() {
    var userName = document.getElementById("user_name");
    var pattern = /^[A-Za-z0-9]+$/;
    if(pattern.test(userName.value)){
      if(userName.value.length > 5 && userName.value.length < 25)
      {
        isUserNameValidate = true;
        document.getElementById('user_name_label').innerHTML = '';
      } else {
        document.getElementById('user_name_label').innerHTML = 'Invalid, hint: max 25, min 6, no space';
        isUserNameValidate = false;
      }
    } else {
      document.getElementById('user_name_label').innerHTML = 'Invalid, hint: max 25, min 6, no space';
      isUserNameValidate = false;
    }
  }

  function validateEmail() {
    var email = document.getElementById("email");
    var pattern = /^[A-Za-z0-9@.]+$/;
    if(pattern.test(email.value)){
      if (email.value.includes('@')) {
        if (email.value.includes('.')) {
          isEmailValidate = true;
          document.getElementById('email_label').innerHTML = '';
        } else {
          document.getElementById('email_label').innerHTML = 'missing a dot';
          isEmailValidate = false;
        }
      } else {
        document.getElementById('email_label').innerHTML = 'missing @';
        isEmailValidate = false;
      }
      
    } else {
      document.getElementById('email_label').innerHTML = 'Invalid, @ or . is missing';
    }
  }

  function validatePassword() {
    var password = document.getElementById("password");
    
    if(password.value.length > 5 && password.value.length < 25)
    {
      
      document.getElementById('password_label').innerHTML = '';
    } else {
      document.getElementById('password_label').innerHTML = 'Invalid, max 25 min 6';

    }
  }

  function validateConfirmPassword() {
    var password = document.getElementById("password");
    var confirmPassword = document.getElementById("confirm_pasword");

    if(confirmPassword.value.length > 5 && confirmPassword.value.length < 25)
    {
      if(password.value == confirmPassword.value) {
        isPasswordValidate = true;
        document.getElementById('confirm_password_label').innerHTML = '';
      } else {
        document.getElementById('confirm_password_label').innerHTML = 'Password does not match !';
        isPasswordValidate = false;
      }
      
    } else {
      document.getElementById('confirm_password_label').innerHTML = 'Invalid, max 25 min 6';
      isPasswordValidate = false ;
    }
  }

  function validateForm(){

    var dob = document.getElementById("dob");
    var startingDate = document.getElementById("starting_date");

    if (dob.value.length == 10) {
      isDOBValidate = true;
      document.getElementById('dob').innerHTML = '';
    } else {
      document.getElementById('dob').innerHTML = 'Date is Missing';
    }
    if (startingDate.value.length == 10) {
      isStartingDateValidate = true;
      document.getElementById('starting_date_label').innerHTML = '';
    } else {
      document.getElementById('starting_date_label').innerHTML = 'Date is Missing';
    }

    if (isFullNameValidate && isPasswordValidate &&isDOBValidate && isStartingDateValidate){
      var form = document.getElementById('myForm1');
      /*var button = document.getElementById('submit_button');
      button.type = 'submit';*/
      //document.getElementById('confirm_password_label').innerHTML = 'ok';
      form.submit();
    } 
    else {
     // document.getElementById('confirm_password_label').innerHTML = 'Invalid or Missing Data';
    }
  }



</script>