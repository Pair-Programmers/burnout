<!DOCTYPE html>
<html>
<head>
  @include('partials/head')

  <title>Abexle</title>
</head>
<body>
  
  @include('partials/navbarEmployee')
  
  <div class="container-fluid">
  <div class="row">
    <div class="col-sm-1" ></div>
    <div class="col-sm-10" style="margin-top: 30px; ">
      <h4 style="text-align: center;"><label style="color: red" ><?php if (isset($_SESSION['message_survey'])) {
              echo $_SESSION['message_survey'];
              } ?></label>
      </h4>
      <h5 style="text-align: center;">
        (1) Strongly Disagree (2) Disagree (3) Neutral  (4) Agree (5) Strongly Agree
      </h5>
      <div class="container" style="margin-top: 20px">
        <form action="addSurvey">
          <table class="table" >
            <thead>
              <tr>
                <th scope="col">No.</th>
                <th scope="col">Questions</th>
                <th scope="col">Options</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <th scope="row">1</th>
                <td> Work activities that I once found enjoyable now feel like drudgery</td>
                <td>
                  <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="q1" id="q1" value="1" required>
                    <label class="form-check-label" for="inlineRadio1">1</label>
                  </div>
                  
                  <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="q1" id="q1" value="2">
                    <label class="form-check-label" for="inlineRadio2">2</label>
                  </div>

                  <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="q1" id="q1" value="3">
                    <label class="form-check-label" for="inlineRadio2">3</label>
                  </div>

                  <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="q1" id="q1" value="4">
                    <label class="form-check-label" for="inlineRadio2">4</label>
                  </div>

                  <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="q1" id="q1" value="5">
                    <label class="form-check-label" for="inlineRadio2">5</label>
                  </div>

                </td>
                
              </tr>
              <tr>
                <th scope="row">2</th>
                <td> I experience low energy levels at the job.</td>
                <td>
                  <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="q2" id="q2" value="1" required>
                    <label class="form-check-label" for="inlineRadio1">1</label>
                  </div>
                  
                  <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="q2" id="q2" value="2">
                    <label class="form-check-label" for="inlineRadio2">2</label>
                  </div>

                  <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="q2" id="q2" value="3">
                    <label class="form-check-label" for="inlineRadio2">3</label>
                  </div>

                  <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="q2" id="q2" value="4">
                    <label class="form-check-label" for="inlineRadio2">4</label>
                  </div>

                  <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="q2" id="q2" value="5">
                    <label class="form-check-label" for="inlineRadio2">5</label>
                  </div>
                  
                </td>
                
              </tr>
              <tr>
                <th scope="row">3</th>
                <td>I am bored with my job.</td>
                <td>
                  <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="q3" id="q3" value="1" required>
                    <label class="form-check-label" for="inlineRadio1">1</label>
                  </div>
                  
                  <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="q3" id="q3" value="2">
                    <label class="form-check-label" for="inlineRadio2">2</label>
                  </div>

                  <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="q3" id="q3" value="3">
                    <label class="form-check-label" for="inlineRadio2">3</label>
                  </div>

                  <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="q3" id="q3" value="4">
                    <label class="form-check-label" for="inlineRadio2">4</label>
                  </div>

                  <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="q3" id="q3" value="5">
                    <label class="form-check-label" for="inlineRadio2">5</label>
                  </div>
                  
                </td>
                
              </tr>
              <tr>
                <th scope="row">4</th>
                <td>I have become more cynical about my job.</td>
                <td>
                  <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="q4" id="q4" value="1" required>
                    <label class="form-check-label" for="inlineRadio1">1</label>
                  </div>
                  
                  <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="q4" id="q4" value="2">
                    <label class="form-check-label" for="inlineRadio2">2</label>
                  </div>

                  <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="q4" id="q4" value="3">
                    <label class="form-check-label" for="inlineRadio2">3</label>
                  </div>

                  <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="q4" id="q4" value="4">
                    <label class="form-check-label" for="inlineRadio2">4</label>
                  </div>

                  <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="q4" id="q4" value="5">
                    <label class="form-check-label" for="inlineRadio2">5</label>
                  </div>

                </td>
                
              </tr>
              <tr>
                <th scope="row">5</th>
                <td> I feel imprisoned by my work</td>
                <td>
                  <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="q5" id="q5" value="1" required>
                    <label class="form-check-label" for="inlineRadio1">1</label>
                  </div>
                  
                  <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="q5" id="q5" value="2">
                    <label class="form-check-label" for="inlineRadio2">2</label>
                  </div>

                  <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="q5" id="q5" value="3">
                    <label class="form-check-label" for="inlineRadio2">3</label>
                  </div>

                  <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="q5" id="q5" value="4">
                    <label class="form-check-label" for="inlineRadio2">4</label>
                  </div>

                  <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="q5" id="q5" value="5">
                    <label class="form-check-label" for="inlineRadio2">5</label>
                  </div>
                  
                </td>
                
              </tr>
              <tr>
                <th scope="row">6</th>
                <td> I feel like leaving the office and going away</td>
                <td>
                  <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="q6" id="q6" value="1" required>
                    <label class="form-check-label" for="inlineRadio1">1</label>
                  </div>
                  
                  <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="q6" id="q6" value="2">
                    <label class="form-check-label" for="inlineRadio2">2</label>
                  </div>

                  <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="q6" id="q6" value="3">
                    <label class="form-check-label" for="inlineRadio2">3</label>
                  </div>

                  <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="q6" id="q6" value="4">
                    <label class="form-check-label" for="inlineRadio2">4</label>
                  </div>

                  <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="q6" id="q6" value="5">
                    <label class="form-check-label" for="inlineRadio2">5</label>
                  </div>
                  
                </td>
                
              </tr>
              <tr>
                <th scope="row">7</th>
                <td>I have reached the end of the tunnel.</td>
                <td>
                  <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="q7" id="q7" value="1" required>
                    <label class="form-check-label" for="inlineRadio1">1</label>
                  </div>
                  
                  <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="q7" id="q7" value="2">
                    <label class="form-check-label" for="inlineRadio2">2</label>
                  </div>

                  <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="q7" id="q7" value="3">
                    <label class="form-check-label" for="inlineRadio2">3</label>
                  </div>

                  <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="q7" id="q7" value="4">
                    <label class="form-check-label" for="inlineRadio2">4</label>
                  </div>

                  <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="q7" id="q7" value="5">
                    <label class="form-check-label" for="inlineRadio2">5</label>
                  </div>

                </td>
                
              </tr>
              <tr>
                <th scope="row">8</th>
                <td>I feel cheated at the workplace.</td>
                <td>
                  <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="q8" id="q8" value="1" required>
                    <label class="form-check-label" for="inlineRadio1">1</label>
                  </div>
                  
                  <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="q8" id="q8" value="2">
                    <label class="form-check-label" for="inlineRadio2">2</label>
                  </div>

                  <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="q8" id="q8" value="3">
                    <label class="form-check-label" for="inlineRadio2">3</label>
                  </div>

                  <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="q8" id="q8" value="4">
                    <label class="form-check-label" for="inlineRadio2">4</label>
                  </div>

                  <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="q8" id="q8" value="5">
                    <label class="form-check-label" for="inlineRadio2">5</label>
                  </div>
                  
                </td>
                
              </tr>
              <tr>
                <th scope="row">9</th>
                <td>My saturation point from the job is nearing.</td>
                <td>
                  <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="q9" id="q9" value="1" required>
                    <label class="form-check-label" for="inlineRadio1">1</label>
                  </div>
                  
                  <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="q9" id="q9" value="2">
                    <label class="form-check-label" for="inlineRadio2">2</label>
                  </div>

                  <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="q9" id="q9" value="3">
                    <label class="form-check-label" for="inlineRadio2">3</label>
                  </div>

                  <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="q9" id="q9" value="4">
                    <label class="form-check-label" for="inlineRadio2">4</label>
                  </div>

                  <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="q9" id="q9" value="5">
                    <label class="form-check-label" for="inlineRadio2">5</label>
                  </div>
                  
                </td>
                
              </tr>
              <tr>
                <th scope="row">10</th>
                <td>I don’t feel like doing my job anymore.</td>
                <td>
                  <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="q10" id="q10" value="1" required>
                    <label class="form-check-label" for="inlineRadio1">1</label>
                  </div>
                  
                  <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="q10" id="q10" value="2">
                    <label class="form-check-label" for="inlineRadio2">2</label>
                  </div>

                  <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="q10" id="q10" value="3">
                    <label class="form-check-label" for="inlineRadio2">3</label>
                  </div>

                  <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="q10" id="q10" value="4">
                    <label class="form-check-label" for="inlineRadio2">4</label>
                  </div>

                  <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="q10" id="q10" value="5">
                    <label class="form-check-label" for="inlineRadio2">5</label>
                  </div>

                </td>
                
              </tr>
              <tr>
                <th scope="row">11</th>
                <td>My job feels painfully empty.</td>
                <td>
                  <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="q11" id="q11" value="1" required>
                    <label class="form-check-label" for="inlineRadio1">1</label>
                  </div>
                  
                  <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="q11" id="q11" value="2">
                    <label class="form-check-label" for="inlineRadio2">2</label>
                  </div>

                  <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="q11" id="q11" value="3">
                    <label class="form-check-label" for="inlineRadio2">3</label>
                  </div>

                  <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="q11" id="q11" value="4">
                    <label class="form-check-label" for="inlineRadio2">4</label>
                  </div>

                  <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="q11" id="q11" value="5">
                    <label class="form-check-label" for="inlineRadio2">5</label>
                  </div>
                  
                </td>
                
              </tr>
              <tr>
                <th scope="row">12</th>
                <td>I feel trapped in my job.</td>
                <td>
                  <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="q12" id="q12" value="1" required>
                    <label class="form-check-label" for="inlineRadio1">1</label>
                  </div>
                  
                  <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="q12" id="q12" value="2">
                    <label class="form-check-label" for="inlineRadio2">2</label>
                  </div>

                  <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="q12" id="q12" value="3">
                    <label class="form-check-label" for="inlineRadio2">3</label>
                  </div>

                  <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="q12" id="q12" value="4">
                    <label class="form-check-label" for="inlineRadio2">4</label>
                  </div>

                  <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="q12" id="q12" value="5">
                    <label class="form-check-label" for="inlineRadio2">5</label>
                  </div>
                  
                </td>
                
              </tr>
              <tr>
                <th scope="row">13</th>
                <td>I feel like I am a human machine at the workplace.</td>
                <td>
                  <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="q13" id="q13" value="1" required>
                    <label class="form-check-label" for="inlineRadio1">1</label>
                  </div>
                  
                  <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="q13" id="q13" value="2">
                    <label class="form-check-label" for="inlineRadio2">2</label>
                  </div>

                  <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="q13" id="q13" value="3">
                    <label class="form-check-label" for="inlineRadio2">3</label>
                  </div>

                  <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="q13" id="q13" value="4">
                    <label class="form-check-label" for="inlineRadio2">4</label>
                  </div>

                  <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="q13" id="q13" value="5">
                    <label class="form-check-label" for="inlineRadio2">5</label>
                  </div>

                </td>
                
              </tr>
              <tr>
                <th scope="row">14</th>
                <td>I feel like my organisation has cut my wings.</td>
                <td>
                  <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="q14" id="q14" value="1" required>
                    <label class="form-check-label" for="inlineRadio1">1</label>
                  </div>
                  
                  <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="q14" id="q14" value="2">
                    <label class="form-check-label" for="inlineRadio2">2</label>
                  </div>

                  <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="q14" id="q14" value="3">
                    <label class="form-check-label" for="inlineRadio2">3</label>
                  </div>

                  <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="q14" id="q14" value="4">
                    <label class="form-check-label" for="inlineRadio2">4</label>
                  </div>

                  <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="q14" id="q14" value="5">
                    <label class="form-check-label" for="inlineRadio2">5</label>
                  </div>
                  
                </td>
                
              </tr>
              <tr>
                <th scope="row">15</th>
                <td>I feel drained and used up in my job.</td>
                <td>
                  <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="q15" id="q15" value="1" required>
                    <label class="form-check-label" for="inlineRadio1">1</label>
                  </div>
                  
                  <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="q15" id="q15" value="2">
                    <label class="form-check-label" for="inlineRadio2">2</label>
                  </div>

                  <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="q15" id="q15" value="3">
                    <label class="form-check-label" for="inlineRadio2">3</label>
                  </div>

                  <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="q15" id="q15" value="4">
                    <label class="form-check-label" for="inlineRadio2">4</label>
                  </div>

                  <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="q15" id="q15" value="5">
                    <label class="form-check-label" for="inlineRadio2">5</label>
                  </div>
                  
                </td>
                
              </tr>
              <tr>
                <th scope="row">16</th>
                <td>I feel like I am in a rut.</td>
                <td>
                  <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="q16" id="q16" value="1" required>
                    <label class="form-check-label" for="inlineRadio1">1</label>
                  </div>
                  
                  <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="q16" id="q16" value="2">
                    <label class="form-check-label" for="inlineRadio2">2</label>
                  </div>

                  <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="q16" id="q16" value="3">
                    <label class="form-check-label" for="inlineRadio2">3</label>
                  </div>

                  <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="q16" id="q16" value="4">
                    <label class="form-check-label" for="inlineRadio2">4</label>
                  </div>

                  <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="q16" id="q16" value="5">
                    <label class="form-check-label" for="inlineRadio2">5</label>
                  </div>

                </td>
                
              </tr><tr>
                <th scope="row">17</th>
                <td>My efforts go unappreciated at the workplace.</td>
                <td>
                  <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="q17" id="q17" value="1" required>
                    <label class="form-check-label" for="inlineRadio1">1</label>
                  </div>
                  
                  <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="q17" id="q17" value="2">
                    <label class="form-check-label" for="inlineRadio2">2</label>
                  </div>

                  <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="q17" id="q17" value="3">
                    <label class="form-check-label" for="inlineRadio2">3</label>
                  </div>

                  <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="q17" id="q17" value="4">
                    <label class="form-check-label" for="inlineRadio2">4</label>
                  </div>

                  <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="q17" id="q17" value="5">
                    <label class="form-check-label" for="inlineRadio2">5</label>
                  </div>

                </td>
                
              </tr><tr>
                <th scope="row">18</th>
                <td>I feel like a candle burning at both ends.</td>
                <td>
                  <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="q18" id="q18" value="1" required>
                    <label class="form-check-label" for="inlineRadio1">1</label>
                  </div>
                  
                  <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="q18" id="q18" value="2">
                    <label class="form-check-label" for="inlineRadio2">2</label>
                  </div>

                  <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="q18" id="q18" value="3">
                    <label class="form-check-label" for="inlineRadio2">3</label>
                  </div>

                  <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="q18" id="q18" value="4">
                    <label class="form-check-label" for="inlineRadio2">4</label>
                  </div>

                  <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="q18" id="q18" value="5">
                    <label class="form-check-label" for="inlineRadio2">5</label>
                  </div>

                </td>
                
              </tr><tr>
                <th scope="row">19</th>
                <td>I feel like I am stuck in a situation from which I cannot extricate myself.</td>
                <td>
                  <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="q19" id="q19" value="1" required>
                    <label class="form-check-label" for="inlineRadio1">1</label>
                  </div>
                  
                  <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="q19" id="q19" value="2">
                    <label class="form-check-label" for="inlineRadio2">2</label>
                  </div>

                  <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="q19" id="q19" value="3">
                    <label class="form-check-label" for="inlineRadio2">3</label>
                  </div>

                  <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="q19" id="q19" value="4">
                    <label class="form-check-label" for="inlineRadio2">4</label>
                  </div>

                  <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="q19" id="q19" value="5">
                    <label class="form-check-label" for="inlineRadio2">5</label>
                  </div>

                </td>
                
              </tr><tr>
                <th scope="row">20</th>
                <td>I feel disillusioned about my job.</td>
                <td>
                  <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="q20" id="q20" value="1" required>
                    <label class="form-check-label" for="inlineRadio1">1</label>
                  </div>
                  
                  <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="q20" id="q20" value="2">
                    <label class="form-check-label" for="inlineRadio2">2</label>
                  </div>

                  <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="q20" id="q20" value="3">
                    <label class="form-check-label" for="inlineRadio2">3</label>
                  </div>

                  <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="q20" id="q20" value="4">
                    <label class="form-check-label" for="inlineRadio2">4</label>
                  </div>

                  <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="q20" id="q20" value="5">
                    <label class="form-check-label" for="inlineRadio2">5</label>
                  </div>

                </td>
                
              </tr><tr>
                <th scope="row">21</th>
                <td>I feel I am in a no-win situation.</td>
                <td>
                  <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="q21" id="q21" value="1" required>
                    <label class="form-check-label" for="inlineRadio1">1</label>
                  </div>
                  
                  <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="q21" id="q21" value="2">
                    <label class="form-check-label" for="inlineRadio2">2</label>
                  </div>

                  <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="q21" id="q21" value="3">
                    <label class="form-check-label" for="inlineRadio2">3</label>
                  </div>

                  <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="q21" id="q21" value="4">
                    <label class="form-check-label" for="inlineRadio2">4</label>
                  </div>

                  <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="q21" id="q21" value="5">
                    <label class="form-check-label" for="inlineRadio2">5</label>
                  </div>

                </td>
                
              </tr><tr>
                <th scope="row">22</th>
                <td>My enthusiasm declines as the work day progresses.</td>
                <td>
                  <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="q22" id="q22" value="1" required>
                    <label class="form-check-label" for="inlineRadio1">1</label>
                  </div>
                  
                  <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="q22" id="q22" value="2">
                    <label class="form-check-label" for="inlineRadio2">2</label>
                  </div>

                  <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="q22" id="q22" value="3">
                    <label class="form-check-label" for="inlineRadio2">3</label>
                  </div>

                  <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="q22" id="q22" value="4">
                    <label class="form-check-label" for="inlineRadio2">4</label>
                  </div>

                  <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="q22" id="q22" value="5">
                    <label class="form-check-label" for="inlineRadio2">5</label>
                  </div>

                </td>
                
              </tr><tr>
                <th scope="row">23</th>
                <td>My mental energy gets sapped by the job</td>
                <td>
                  <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="q23" id="q23" value="1" required>
                    <label class="form-check-label" for="inlineRadio1">1</label>
                  </div>
                  
                  <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="q23" id="q23" value="2">
                    <label class="form-check-label" for="inlineRadio2">2</label>
                  </div>

                  <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="q23" id="q23" value="3">
                    <label class="form-check-label" for="inlineRadio2">3</label>
                  </div>

                  <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="q23" id="q23" value="4">
                    <label class="form-check-label" for="inlineRadio2">4</label>
                  </div>

                  <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="q23" id="q23" value="5">
                    <label class="form-check-label" for="inlineRadio2">5</label>
                  </div>

                </td>
                
              </tr><tr>
                <th scope="row">24</th>
                <td>I experience a loss of confidence when I am working.</td>
                <td>
                  <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="q24" id="q24" value="1" required>
                    <label class="form-check-label" for="inlineRadio1">1</label>
                  </div>
                  
                  <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="q24" id="q24" value="2">
                    <label class="form-check-label" for="inlineRadio2">2</label>
                  </div>

                  <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="q24" id="q24"value="3">
                    <label class="form-check-label" for="inlineRadio2">3</label>
                  </div>

                  <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="q24" id="q24" value="4">
                    <label class="form-check-label" for="inlineRadio2">4</label>
                  </div>

                  <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="q24" id="q24" value="5">
                    <label class="form-check-label" for="inlineRadio2">5</label>
                  </div>

                </td>
                
              </tr><tr>
                <th scope="row">25</th>
                <td>I would not like to work in this organisation for long.</td>
                <td>
                  <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="q25" id="q25" value="1" required>
                    <label class="form-check-label" for="inlineRadio1">1</label>
                  </div>
                  
                  <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="q25" id="q25" value="2">
                    <label class="form-check-label" for="inlineRadio2">2</label>
                  </div>

                  <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="q25" id="q25" value="3">
                    <label class="form-check-label" for="inlineRadio2">3</label>
                  </div>

                  <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="q25" id="q25" value="4">
                    <label class="form-check-label" for="inlineRadio2">4</label>
                  </div>

                  <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="q25" id="q25" value="5">
                    <label class="form-check-label" for="inlineRadio2">5</label>
                  </div>

                </td>
                
              </tr><tr>
                <th scope="row">26</th>
                <td>I have become detached with my family since I started this job.</td>
                <td>
                  <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="q26" id="q26" value="1" required>
                    <label class="form-check-label" for="inlineRadio1">1</label>
                  </div>
                  
                  <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="q26" id="q26" value="2">
                    <label class="form-check-label" for="inlineRadio2">2</label>
                  </div>

                  <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="q26" id="q26" value="3">
                    <label class="form-check-label" for="inlineRadio2">3</label>
                  </div>

                  <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="q26" id="q26" value="4">
                    <label class="form-check-label" for="inlineRadio2">4</label>
                  </div>

                  <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="q26" id="q26" value="5">
                    <label class="form-check-label" for="inlineRadio2">5</label>
                  </div>

                </td>
                
              </tr><tr>
                <th scope="row">27</th>
                <td>I wonder why I am doing what I am doing at my job.</td>
                <td>
                  <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="q27" id="q27" value="1" required>
                    <label class="form-check-label" for="inlineRadio1">1</label>
                  </div>
                  
                  <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="q27" id="q27" value="2">
                    <label class="form-check-label" for="inlineRadio2">2</label>
                  </div>

                  <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="q27" id="q27" value="3">
                    <label class="form-check-label" for="inlineRadio2">3</label>
                  </div>

                  <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="q27" id="q27" value="4">
                    <label class="form-check-label" for="inlineRadio2">4</label>
                  </div>

                  <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="q27" id="q27" value="5">
                    <label class="form-check-label" for="inlineRadio2">5</label>
                  </div>

                </td>
                
              </tr><tr>
                <th scope="row">28</th>
                <td>My work does not make any sense to me.</td>
                <td>
                  <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="q28" id="q28" value="1" required>
                    <label class="form-check-label" for="inlineRadio1">1</label>
                  </div>
                  
                  <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="q28" id="q28" value="2">
                    <label class="form-check-label" for="inlineRadio2">2</label>
                  </div>

                  <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="q28" id="q28" value="3">
                    <label class="form-check-label" for="inlineRadio2">3</label>
                  </div>

                  <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="q28" id="q28" value="4">
                    <label class="form-check-label" for="inlineRadio2">4</label>
                  </div>

                  <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="q28" id="q28" value="5">
                    <label class="form-check-label" for="inlineRadio2">5</label>
                  </div>

                </td>
                
                
              </tbody>

            </table>
            <div style="text-align: center; margin-top: 40px; margin-bottom: 50px">
             <button type="submit" class="btn btn-primary" style="width: 30%">Submit</button>
           </div>
           
         </form>      
       </div>
     </div>
     <div class="col-sm-1"></div>
   </div>
   
</div>
 </body>
 </html>