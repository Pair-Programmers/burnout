
<!DOCTYPE html>
<html>
<head>
    @include('partials/head')

    <script type="text/javascript">

    $.ajax({
      url: '{{('getCurrentMonthSurveyData')}}',
      type: 'get',
      success: function(response){
        
          if (response.message != 'ERROR')
          {
            
            var tbody = document.getElementById("table_body");


            for (var i = 0; i < response.length; i++) {
              var tblRow = document.createElement("tr");
              tblRow.id = "row" + i;
              

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
        <select class="form-control" id="designationComboBox" name="designationComboBox" onchange="eventOnChange()">
             
             <option>All</option>
             <option>Senior Manager</option>
             <option>Supervisor/Team Leader</option>
             <option>Senior Developer</option>
             <option>Developer</option>
             <option>Testor</option>
             <option>Designer</option>
             <option>Other</option>

                         
             </select>


      

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
            

            <!-- from data base -->


          </tbody>
         </table>      
        </div>
              
  
</body>
</html>

<script type="text/javascript">
  
  function eventOnChange() {
   
    var designationComboBox = document.getElementById("designationComboBox");
    var tbody = document.getElementById("table_body");

    $.ajax({
      url: '{{('getCurrentMonthSurveyData')}}',
      type: 'get',
      success: function(response){
        
          if (response.message != 'ERROR')
          { 
            var currentRows = tbody.rows.length;

            console.log('length  ' + currentRows);
            for (var i = -1; i < currentRows-1; i++) {
              console.log("di : " + i);
              tbody.deleteRow(i);
              
            }

            
            

            var option = $("#designationComboBox").val();

            if (option == 'All') {

              for (var i = 0; i < response.length; i++) {
                console.log("ci - " + i);
                createTable(i);
              }
              
            } else {
              for (var i = 0; i < response.length; i++) {
                if (response[i].designation == option) {
                  console.log("cxi - " + i);
                  createTable(i);
                } 
              }
            }

            

            

          function createTable(i){
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