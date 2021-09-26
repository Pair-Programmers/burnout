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
                 Verify your Email .. 
        </h2> 

        <form style="margin-top: 15px;" action="addEmployer">
          
          <div class="form-group">
            <label for="exampleInputcompany">Verification Code</label>
            <input type="text" class="form-control" id="company_name" name="company_name" aria-describedby="companyName" required>
            <small id="companyName" class="form-text text-muted">enter code below that sent to your email adress</small>
            <a href = "mailto:miahamza7262@gmail.com?subject = Feedback&body = Ohh yess">
            Send Feedback
            </a>
          </div>
          
          
          <button type="submit" class="btn btn-primary">Verify</button>
          
        </form>

      </div>
      <div class="col-md-3"></div>
    </div>

</body>
</html>
