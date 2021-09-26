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
      <div class="col-md-3"></div>
      <div class="col-md-6" style="margin-top: 35px; ">
       
       <h2>
         Update your Company Profile
       </h2> 


       <form style="margin-top: 15px;" action="UpdateEmployer" id="myForm">
        
        <div class="form-group">
          <label for="exampleInputcompany">Company Name</label>
          <input type="text" class="form-control" id="company_name" name="company_name" aria-describedby="companyName" required pattern="[A-Za-z ]{5,25}" title="Alphabets Only, min 5, max 25" onkeyup="validateCompanyName()">
          <label style="color: red" id="company_name_label"> </label>
        </div>
        
        <div class="form-group">
          <label for="exampleInputEmployer">Employer ID / Username</label>
          <input type="text" class="form-control" id="user_name" name="user_name" aria-describedby="employerName" readonly="true">
        </div>
        
        <div class="form-group">
          <label for="exampleInputEmail1">Email address</label>
          <input type="email" class="form-control" id="email" name="email" required readonly="true">
          
        </div>

        <div class="form-group">
          <label for="exampleInputPassword1">New Password</label>
          <input type="password" class="form-control" id="password" name="password" required minlength="5" maxlength="15" onkeyup="validatePassword()">
          <label style="color: red" id="password_label"></label>
        </div>
        
        <div class="form-group">
          <label for="exampleInputPassword1">Confirm Password</label>
          <input type="password" class="form-control" id="confirm_password" name="confirm_password" required minlength="5" maxlength="15" onkeyup="validateConfirmPassword()">
          <label style="color: red" id="confirm_password_label"></label>
        </div>

        <button type="button" class="btn btn-primary" onclick="validateForm()">Update</button>

      </form>

    </div>
    <div class="col-md-3"></div>
  </div>
</div>
<br>
</body>
</html>

<script type="text/javascript">

  //Semployee and adding data to above form
  $.ajax({
    url: '{{('searchEmployer')}}/' + '<?php echo $_SESSION['user_name']; ?>',
    type: 'get',
    success: function(response){
      if (response.message != 'ERROR')
      {
        $("#company_name").val(response[0].company_name);
        $("#user_name").val(response[0].user_name);
        $("#email").val(response[0].email);
        $("#password").val(response[0].password);
        $("#confirm_password").val(response[0].password);
        
      }

    }
  });

  
  var isComanyNameValidate = true;
  //var isEmployerIdValidate = false;
  //var isEmailValidate = false;
  var isPasswordValidate = true;
  

  function validateCompanyName() {
    var companyName = document.getElementById("company_name");
    var pattern = /^[A-Za-z0-9 ]+$/;
    if(pattern.test(companyName.value)){
      if(companyName.value.length > 5 && companyName.value.length < 25)
      {
        isComanyNameValidate = true;
        document.getElementById('company_name_label').innerHTML = '';
      } else {
        document.getElementById('company_name_label').innerHTML = 'Invalid, hint: max 25, min 6, no special character';
        isComanyNameValidate = false;
      }
    } else {
      document.getElementById('company_name_label').innerHTML = 'Invalid, hint: max 25, min 6, no special character';
      isComanyNameValidate = false;
    }
  }

  /*EXTRA FUNTION
  function validateEmployerId() {
    var userName = document.getElementById("user_name");
    var pattern = /^[A-Za-z0-9]+$/;
    if(pattern.test(userName.value)){
      if(userName.value.length > 5 && userName.value.length < 25)
      {
        isEmployerIdValidate = true;
        document.getElementById('user_name_label').innerHTML = '';
      } else {
        document.getElementById('user_name_label').innerHTML = 'Invalid, hint: max 25, min 6, no space';
      }
    } else {
      document.getElementById('user_name_label').innerHTML = 'Invalid, hint: max 25, min 6, no space';
    }
  }*/

  /* EXTRA FUNCTION
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
        }
      } else {
        document.getElementById('email_label').innerHTML = 'missing @';
      }
      
    } else {
      document.getElementById('email_label').innerHTML = 'Invalid, @ or . is missing';
    }
  }*/

  function validatePassword() {
    var password = document.getElementById("password");
    
    if(password.value.length > 5 && password.value.length < 25)
    {
      
      document.getElementById('password_label').innerHTML = '';
    } else {
      document.getElementById('password_label').innerHTML = 'Invalid, max 25 min 6';
      isPasswordValidate = false;
    }
  }

  function validateConfirmPassword() {
    var password = document.getElementById("password");
    var confirmPassword = document.getElementById("confirm_password");

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
      isPasswordValidate = false;
    }
  }

  function validateForm(){
    if (isComanyNameValidate && isPasswordValidate){
      var form = document.getElementById('myForm');
      document.getElementById('confirm_password_label').innerHTML = '';
      window.alert("Updated Successfully !");
      form.submit();
    } 
    else {
      document.getElementById('confirm_password_label').innerHTML = 'Invalid or Missing Data';
    }
  }


  
</script>