<?php

namespace App\Http\Controllers;

use App\Survey;
use App\Employer;
use App\Employee;

use Request;

session_start();

class SurveyController extends Controller
{
    public function addSurvey(\Illuminate\Http\Request $request)
    {  
        $survey = new Survey();
        $employee = new Employee();

        $employee = Employee::find($_SESSION['user_id']);
        
        if ($employee->isSurveyDoneThisMonth == "n") {
           
        

            $employee_id = $_SESSION['user_id'];
            $employer_id = $_SESSION['employer_id'];
            $q1 = Request::post('q1');
            $q2 = Request::post('q2');
            $q3 = Request::post('q3');
            $q4 = Request::post('q4');
            $q5 = Request::post('q5');
            $q6 = Request::post('q6');
            $q7 = Request::post('q7');
            $q8 = Request::post('q8');
            $q9 = Request::post('q9');
            $q10 = Request::post('q10');
            $q11 = Request::post('q11');
            $q12 = Request::post('q12');
            $q13 = Request::post('q13');
            $q14 = Request::post('q14');
            $q15 = Request::post('q15');
            $q16 = Request::post('q16');
            $q17 = Request::post('q17');
            $q18 = Request::post('q18');
            $q19 = Request::post('q19');
            $q20 = Request::post('q20');
            $q21 = Request::post('q21');
            $q22 = Request::post('q22');
            $q23 = Request::post('q23');
            $q24 = Request::post('q24');
            $q25 = Request::post('q25');
            $q26 = Request::post('q26');
            $q27 = Request::post('q27');
            $q28 = Request::post('q28');
            
            $survey->employee_id = $employee_id;
            $survey->employer_id = $employer_id;
            $survey->q1 = $q1;
            $survey->q2 = $q2;
            $survey->q3 = $q3;
            $survey->q4 = $q4;
            $survey->q5 = $q5;
            $survey->q6 = $q6;
            $survey->q7 = $q7;
            $survey->q8 = $q8;
            $survey->q9 = $q9;
            $survey->q10 = $q10;
            $survey->q11 = $q11;
            $survey->q12 = $q12;
            $survey->q13 = $q13;
            $survey->q14 = $q14;
            $survey->q15 = $q15;
            $survey->q16 = $q16;
            $survey->q17 = $q17;
            $survey->q18 = $q18;
            $survey->q19 = $q19;
            $survey->q20 = $q20;
            $survey->q21 = $q21;
            $survey->q22 = $q22;
            $survey->q23 = $q23;
            $survey->q24 = $q24;
            $survey->q25 = $q25;
            $survey->q26 = $q26;
            $survey->q27 = $q27;
            $survey->q28 = $q28;
            $survey->date = date("Y-m-d");
            
            $meaninglessness = (intval($q1) + intval($q2) + intval($q3) + intval($q4) + intval($q5) + intval($q6) + intval($q7) + intval($q8) + intval($q9) + intval($q10) + intval($q11) + intval($q12)) / 12;

            $exhaustion =  (intval($q13) + intval($q14) + intval($q15) + intval($q16) + intval($q17) + intval($q18) + intval($q19) + intval($q20) + intval($q21)) / 9;

            $demotivation = (intval($q22) + intval($q23) + intval($q24) + intval($q25) + intval($q26) + intval($q27) + intval($q28)) / 7;

            $avg = ($meaninglessness + $exhaustion + $demotivation) / 3;

            $survey->meaninglessness = strval(round($meaninglessness,1));
            $survey->exhaustion = strval(round($exhaustion,1));
            $survey->demotivation = strval(round($demotivation,1));
            $survey->avg_result = strval(round($avg,1));
            if ($avg > 3) {
                $survey->feeling = "Burnout";
            } else if ($avg < 3){
                $survey->feeling = "Setisfied";
            } else {
                $survey->feeling = "Neutral";
            }


            $survey->save();
            $employee->updateIsSurveyDoneThisMonth($employee_id, $employer_id);
            $_SESSION['message'] = "";

            $_SESSION['message_survey'] = "Already Done with Survey this Month !";
            return redirect("doneSurvey"); 
        } 
        else {
            $_SESSION['message_survey'] = "Already Done with Survey this Month !";
            return redirect("survey"); 
        }   
    

        
    }

    public function getCurrentMonthSurveyDataf(){
        $survey = new Survey();
        $result = $survey->getCurrentMonthSurveys($_SESSION['employer_id']);
        
        return $result;
    }

    public function getSurveyHistory($month, $year){

        
        $survey = new Survey();
        $result = $survey->getSurveyHistoryFromDB($_SESSION['employer_id'], $month, $year);
        
        return $result;
    }

}
