  <!DOCTYPE html>
  <html>
  <head>
      @include('partials/head')

      <title>Abexle</title>

      
  </head>
  <body>
      
      @include('partials/navbarStart')

      <div class="row">
        <div class="col-md-3"></div>
        <div class="col-md-6" style="margin-top: 50px; ">
           
           <h2>
                   Register your Company
          </h2> 
          
          <form style="margin-top: 15px;"  id="myForm" name="myForm" action="addEmployer">
            
            <div class="form-group">
              <label for="exampleInputcompany">Company Name</label>
              <input type="text" class="form-control" id="company_name" name="company_name" required onkeyup="validateCompanyName()">
              <label style="color: red" id="company_name_label"></label>
            </div>
            
            <div class="form-group">
              <label for="exampleInputEmployer">Employer ID</label>
              <input type="text" class="form-control" id="user_name" name="user_name" aria-describedby="employerName"  required onkeyup="validateEmployerId()">
              <label style="color: red" id="user_name_label"><?php if (isset($_SESSION['message'])) {
                echo $_SESSION['message'];
              } ?> </label>
            </div>
            
            <div class="form-group">
              <label for="exampleInputEmail1">Email address</label>
              <input type="email" class="form-control" id="email" name="email"  required onkeyup="validateEmail()">
              <label style="color: red" id="email_label"><?php if (isset($_SESSION['message_email'])) {
                echo $_SESSION['message_email'];
              } ?> </label>
            </div>

            <div class="form-group">
              <label for="exampleInputPassword1">Password</label>
              <input type="password" class="form-control" id="password" name="password" minlength="5" maxlength="15" required onkeyup="validatePassword()">
              <label style="color: red" id="password_label"></label>
            </div>

            <div class="form-group">
              <label for="exampleInputPassword1">Confirm Password</label>
              <input type="password" class="form-control" id="confirm_password" name="confirm_password" required onkeyup="validateConfirmPassword()">
              <label style="color: red" id="confirm_password_label"></label>
            </div>
            
            <button type="button" class="btn btn-primary" id="submit_button" onclick="validateForm()">Submit</button>

          </form>

        </div>
        <div class="col-md-3"></div>
      </div>

</body>
</html>

<script type="text/javascript">
  var isComanyNameValidate = false;
  var isEmployerIdValidate = false;
  var isEmailValidate = false;
  var isPasswordValidate = false;
  

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
        isEmployerIdValidate = false;
      }
    } else {
      document.getElementById('user_name_label').innerHTML = 'Invalid, hint: max 25, min 6, no space';
      isEmployerIdValidate = false;
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
      isEmailValidate = false;
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
    if (isComanyNameValidate && isEmployerIdValidate && isEmailValidate && isPasswordValidate){
      var form = document.getElementById('myForm');
      document.getElementById('confirm_password_label').innerHTML = '';
      form.submit();
      var msg = '{{Session::get('alert')}}';
      var exist = '{{Session::has('alert')}}';
      if(exist){
        alert(msg);
      }
    } 
    else {
      document.getElementById('confirm_password_label').innerHTML = 'Invalid Data';
    }
  }

</script> 

<script>
    var msg = '{{Session::get('alert')}}';
    var exist = '{{Session::has('alert')}}';
    if(exist){
      alert(msg);
    }
</script>