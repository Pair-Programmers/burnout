<!DOCTYPE html>
<html>
<head>
    @include('partials/head')

    <script type="text/javascript">

        //<!-- populating years in Years Combo Box -->
        window.onload = function () {
        
          var ddlYears = document.getElementById("Years");
          var month = document.getElementById("Months");
   
          //Determine the Current Year.
          var currentYear = (new Date()).getFullYear();
   
          //Loop and add the Year values to DropDownList.
          for (var i = currentYear; i >= 1950; i--) {
              var option = document.createElement("OPTION");
              option.innerHTML = i;
              option.value = i;
              ddlYears.appendChild(option);
          }

          //setting year and month combo box to current month and year
          ddlYears.value = currentYear;
          month.value = '0' + (parseInt(new Date().getMonth())+1).toString();
        };
    

    /*adding current month surveys at the begigning*/
    $.ajax({
      url: '{{('getCurrentMonthSurveyData')}}',
      type: 'get',
      success: function(response){
          if (response.message != 'ERROR')
          {
            
            var tbody = document.getElementById("table_body");
            for (var i = 0; i < response.length; i++) {
              var tblRow = document.createElement("tr");

              var employeesIdTD = document.createElement('td');
              var nameTd = document.createElement('td');
              var designationTd = document.createElement('td');
              var meaninglessnessTd = document.createElement('td');
              var exhaustionTd = document.createElement('td');
              var demotivationTd = document.createElement('td');
              var avgTd = document.createElement('td');
              var feelingTd = document.createElement('td');

              var text = document.createTextNode(response[i].user_name);
              employeesIdTD.appendChild(text);
              text = document.createTextNode(response[i].full_name);
              nameTd.appendChild(text);
              text = document.createTextNode(response[i].designation);
              designationTd.appendChild(text);
              text = document.createTextNode(response[i].meaninglessness);
              meaninglessnessTd.appendChild(text);
              text = document.createTextNode(response[i].exhaustion);
              exhaustionTd.appendChild(text);
              text = document.createTextNode(response[i].demotivation);
              demotivationTd.appendChild(text);
              text = document.createTextNode(response[i].avg_result);
              avgTd.appendChild(text);
              text = document.createTextNode(response[i].feeling);
              feelingTd.appendChild(text);

              tblRow.appendChild(employeesIdTD);
              tblRow.appendChild(nameTd);
              tblRow.appendChild(designationTd);
              tblRow.appendChild(meaninglessnessTd);
              tblRow.appendChild(exhaustionTd);
              tblRow.appendChild(demotivationTd);
              tblRow.appendChild(avgTd);
              tblRow.appendChild(feelingTd);

              tbody.appendChild(tblRow);
            }


            
          }

      }
    });

    
  
</script>

    <title>Abexle</title>
</head>
<body>
    
    @include('partials/navbarEmployer')

    <div class="row">
      <div class="col-sm-3"></div>

      
      <div class="col-sm-6" style="text-align: center;">
        <div class="btn-group col-lg-12" role="group" aria-label="Basic example" style=" margin-top: 30px; margin-bottom: 30px">
            <a href="{{ url('individualResultView') }}" class="btn" style="background-color: rgb(54, 152, 209); margin-right: 5px">Individual</a>
            <a href="{{ url('organizationResultView') }}" class="btn" style="background-color: rgb(54, 152, 209); margin-right: 5px">Organization</a>
            <a href="{{ url('history') }}" class="btn" style="background-color: rgb(54, 152, 209)">History</a>
        </div>

        <div class="row" style="margin-bottom: 20px">
          <div class="col-sm-6">
            <select class="form-control" id="Years" name="Years" >
              
            </select>
          </div>
          <div class="col-sm-6">
            <select class="form-control" id="Months" name="Months" >
              <option value='01'>Janaury</option>
              <option value='02'>February</option>
              <option value='03'>March</option>
              <option value='04'>April</option>
              <option value='05'>May</option>
              <option value='06'>June</option>
              <option value='07'>July</option>
              <option value='08'>August</option>
              <option value='09'>September</option>
              <option value='10'>October</option>
              <option value='11'>November</option>
              <option value='12'>December</option>
            </select>
          </div>
        </div>
          <select class="form-control" id="designationComboBox" name="designationComboBox" >
            <option>All</option>
            <option>Senior Manager</option>
            <option>Supervisor/Team Leader</option>
            <option>Senior Developer</option>
            <option>Developer</option>
            <option>Testor</option>
            <option>Designer</option>
            <option>Other</option>
          </select>
          <br>
          <button type="button" class="btn btn-secondary btn-lg btn-block" onclick="updateTable()">Search</button>


      </div>

      <div class="col-sm-3"></div>

    </div><!-- row -->  

    <div class="container" style="margin-top: 20px">
  
          <table class="table">
              <thead>
            <tr>
              <th scope="col">Employees ID</th>
              <th scope="col">Name</th>
              <th scope="col">Designation</th>
              <th scope="col">Meaninglessness</th>
              <th scope="col">Exhaustion</th>
              <th scope="col">Demotivation</th>
              <th scope="col">Average</th>
              <th scope="col">Feeling</th>
            </tr>
          </thead>
          <tbody id="table_body">
            <!-- rows will be generate dynamically -->
          </tbody>
         </table>      
        </div>
              
  
</body>
</html>

<script type="text/javascript">
  
  function updateTable() {
   
    var designationComboBox = document.getElementById("designationComboBox");
    var tbody = document.getElementById("table_body");
    var year = $("#Years").val();
    var month = $("#Months").val();

    $.ajax({

      url: '{{('getSurveyHistory')}}/' + month + '/' + year,
      type: 'get',
      success: function(response){
    console.log('click');    
          
          if (response.message != 'ERROR')
          { 
            //deleting previous rows 
            var currentRows = tbody.rows.length;
            for (var i = -1; i < currentRows-1; i++) {
              
              tbody.deleteRow(i);
              
            }

            //checking, relating what designation to show surveys 
            var option = $("#designationComboBox").val();
            if (option == 'All') {

              for (var i = 0; i < response.length; i++) {
                createTableRows(i);
              }
              
            } else {
              for (var i = 0; i < response.length; i++) {
                if (response[i].designation == option) {
                  createTableRows(i);
                } 
              }
            }

            

            

          function createTableRows(i){
            //creating table row
            var tblRow = document.createElement("tr");

              //creting td taags to add in rows
              var employeesIdTD = document.createElement('td');
              var nameTd = document.createElement('td');
              var designationTd = document.createElement('td');
              var meaninglessnessTd = document.createElement('td');
              var exhaustionTd = document.createElement('td');
              var demotivationTd = document.createElement('td');
              var avgTd = document.createElement('td');
              var feelingTd = document.createElement('td');

              //creating text to add in td tags of row
              var text = document.createTextNode(response[i].user_name);
              employeesIdTD.appendChild(text);
              text = document.createTextNode(response[i].full_name);
              nameTd.appendChild(text);
              text = document.createTextNode(response[i].designation);
              designationTd.appendChild(text);
              text = document.createTextNode(response[i].meaninglessness);
              meaninglessnessTd.appendChild(text);
              text = document.createTextNode(response[i].exhaustion);
              exhaustionTd.appendChild(text);
              text = document.createTextNode(response[i].demotivation);
              demotivationTd.appendChild(text);
              text = document.createTextNode(response[i].avg_result);
              avgTd.appendChild(text);
              text = document.createTextNode(response[i].feeling);
              feelingTd.appendChild(text);

              //adding td tags to row
              tblRow.appendChild(employeesIdTD);
              tblRow.appendChild(nameTd);
              tblRow.appendChild(designationTd);
              tblRow.appendChild(meaninglessnessTd);
              tblRow.appendChild(exhaustionTd);
              tblRow.appendChild(demotivationTd);
              tblRow.appendChild(avgTd);
              tblRow.appendChild(feelingTd);

              //adding row to table body 
              tbody.appendChild(tblRow);
          }

          }

      }
    });
  }

</script>