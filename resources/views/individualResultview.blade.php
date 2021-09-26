
<!DOCTYPE html>
<html>
<head>
  @include('partials/head')

  <title>Abexle</title>
</head>
<body>

  @include('partials/navbarEmployer')

  <div class="row">
    <div class="col-sm-3"></div>
    <div class="col-sm-6">
      <div class="btn-group col-lg-12" role="group" aria-label="Basic example" style=" margin-top: 30px; margin-bottom: 30px">
        <a href="{{ url('individualResultView') }}" class="btn" style="background-color: rgb(54, 152, 209); margin-right: 5px">Individual</a>
            <a href="{{ url('organizationResultView') }}" class="btn" style="background-color: rgb(54, 152, 209); margin-right: 5px">Organization</a>
            <a href="{{ url('history') }}" class="btn" style="background-color: rgb(54, 152, 209)">History</a>
      </div>


      <form>
        <div class="form" style="margin-top: 30px">

          <div class="row" >
            <div class="col-sm-10">
              <input type="text" class="form-control" id="user_name_bar" name="user_name_bar" aria-describedby="employerName" placeholder="search for ID / Username">
            </div>
            <div class="col-sm-2" style="text-align: right;">
              <button type="button" class="btn btn-warning" onclick="showEmployeeSurvey()">Search</button>
            </div>


          </div>
        </div>
        <div class="form" style="margin-top: 30px">
          <label for="exampleInputemplyee"> Name </label>
          <input type="text" class="form-control" id="full_name" name="full_name" aria-describedby="companyName" disabled="true">
        </div>

        <div class="form">
          <label for="exampleInputDesignation"> Designation</label>
          <input type="text" class="form-control" id="designation" name="designation" aria-describedby="emailHelp" disabled="true">
        </div>
      </form>

      <div class="container" style="margin-top: 20px; margin-bottom: 20px">
        <h3>
          Result
        </h3>
      </div>
      
      <table class="table">

        <thead>
          <tr>
            <th scope="col">Meaninglessness</th>
            <th scope="col">Exhaustion</th>
            <th scope="col">Demotivation</th>
            <th scope="col">Average</th>
            <th scope="col">Feeling</th>
          </tr>
        </thead>

        <tbody id="table_body" name="table_body">
          
        </tbody>

      </table></div>    



</body>
</html>


<script type="text/javascript">
  
  function showEmployeeSurvey(){
    
    var searchBar = document.getElementById("user_name_bar");
    searchBarID = searchBar.value;
    console.log(searchBarID);
    $.ajax({
      url: '{{('searchEmployeeSurvey')}}/' + searchBarID,
      type: 'get',
      success: function(response){
        if (response.message != 'ERROR')
        {
          $("#full_name").val(response[0].full_name);
          $("#designation").val(response[0].designation);

          var tbody = document.getElementById("table_body");

          var tblRow = document.createElement("tr");

          var meaninglessnessTd = document.createElement('td');
          var exhaustionTd = document.createElement('td');
          var demotivationTd = document.createElement('td');
          var avgTd = document.createElement('td');
          var feelingTd = document.createElement('td');

          var text = document.createTextNode(response[0].meaninglessness);
          meaninglessnessTd.appendChild(text);
          text = document.createTextNode(response[0].exhaustion);
          exhaustionTd.appendChild(text);
          text = document.createTextNode(response[0].demotivation);
          demotivationTd.appendChild(text);
          text = document.createTextNode(response[0].avg_result);
          avgTd.appendChild(text);
          text = document.createTextNode(response[0].feeling);
          feelingTd.appendChild(text);

          tblRow.appendChild(meaninglessnessTd);
          tblRow.appendChild(exhaustionTd);
          tblRow.appendChild(demotivationTd);
          tblRow.appendChild(avgTd);
          tblRow.appendChild(feelingTd);

          tbody.appendChild(tblRow);



        }

      }
    });
  }
</script>