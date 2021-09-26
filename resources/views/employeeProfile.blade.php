<!DOCTYPE html>
<html>
<head>
  @include('partials/head')

  <title>Abexle</title>
</head>
<body>
  @include('partials/navbarEmployee')

  <div class="row" style="margin-top: 20px">
    <div class="col-sm-3"></div>
    <div class="col-sm-6">




      <form style="font-weight: bold; margin-bottom: 20px" action="updateEmployeePassword" id="myForm1">

        <div class="form-group row">
          <div class="col-sm-6">
            <label for="exampleInputDate">User Name</label>
            <input type="id" class="form-control" id="user_name" name="user_name" placeholder="ID / username" readonly="true">
          </div>

          <div class="col-sm-6">
            <label for="exampleInputDate">Full Name</label>
            <input type="text" class="form-control" id="full_name" name="full_name" placeholder=" Full Name" readonly="true">
          </div>
        </div>



        <div class="form-group row">
          <div class="col-sm-6">
            <label for="exampleInputDate">Date of Birth</label>
            <input type="Date" class="form-control" id="dob" name="dob" placeholder="Date of Birth" readonly="true">
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
             <option>Testor</option>
             <option>Designer</option>
             <option>Other</option>            
           </select>
         </div>
         <div class="col-sm-6" style="margin-top: 36px" id="genderRadio">
          <label for="exampleInputDate"> Gender &nbsp; &nbsp; </label>
          
          <div class="form-check form-check-inline">
            <input class="form-check-input" type="radio" name="gender" id="gender" checked value="Male" readonly="true">
            <label class="form-check-label" for="inlineRadio2">Male</label>
          </div>

          <div class="form-check form-check-inline">
            <input class="form-check-input" type="radio" name="gender" id="gender" value="Female" readonly="true">
            <label class="form-check-label" for="inlineRadio2">Female</label>
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
          <input type="email" class="form-control" id="email" name="email" readonly="true">
        </div>

      </div>


      <div class="form-group row">
        <div class="col-sm-6">
          <label for="exampleInputDate">Password</label>
          <input type="password" class="form-control" id="password" name="password" required onkeyup="validatePassword()">
          <label style="color: red" id="password_label"></label>
        </div>
        <div class="col-sm-6">
          <label for="exampleInputDate">Confirm Password</label>
          <input type="password" class="form-control" id="confirm_pasword" name="confirm_pasword" required onkeyup="validateConfirmPassword()">
          <label style="color: red" id="confirm_password_label"></label>
        </div>
      </div>
      <div style="text-align: Right";>
        <button type="button" class="btn btn-primary" onclick="validateForm()">Submit</button>
      </div>
    </form>
  </div>
</div>


</body>
</html>

<script type="text/javascript">
  
  //Semployee and adding data to above form
  $.ajax({
    url: '{{('searchEmployee')}}/' + '<?php echo $_SESSION['user_name']; ?>',
    type: 'get',
    success: function(response){
      if (response.message != 'ERROR')
      {

        $("#user_name").val(response[0].user_name);
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
        $("#email").val(response[0].email);
        $("#password").val(response[0].password);
        $("#confirm_pasword").val(response[0].password);
      }

    }
  });

  
  var isPasswordValidate = true;
  
  function validatePassword() {
    var password = document.getElementById("password");
    var confirmPassword = document.getElementById("confirm_pasword");
    
    if(password.value.length > 5 && password.value.length < 25)
    {
      if(password.value == confirmPassword.value) {
        isPasswordValidate = true;
        document.getElementById('confirm_password_label').innerHTML = '';
      } else {
        document.getElementById('confirm_password_label').innerHTML = 'Password does not match !';
        isPasswordValidate = false;
      }
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

    

    if (isPasswordValidate){
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