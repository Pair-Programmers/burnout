<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Survey extends Model
{
    public function getSurveyByEmployeeID($employerUserName, $userName)
    {
    	$results = DB::select("SELECT user_name, full_name, designation, meaninglessness, exhaustion, demotivation, avg_result, feeling FROM surveys As s, employees AS e WHERE e.employer_id = s.employer_id AND e.id = s.employee_id  AND s.employer_id = $employerUserName AND s.employee_id = $userName AND e.status='Enable' ORDER by s.id DESC LIMIT 1");
        return $results;
    }

    public function getCurrentMonthSurveys($employerID)
    {
    	$startDate = date('Y-m-01');
        $endDate =   date('Y-m-t');

        $result = DB::select("SELECT user_name, full_name, designation, meaninglessness, exhaustion, demotivation, avg_result, feeling FROM surveys As s, employees AS e WHERE e.employer_id = s.employer_id AND e.id = s.employee_id  AND s.employer_id = $employerID  AND e.status='Enable' AND s.date BETWEEN '$startDate' AND '$endDate'");
        return $result;
    }

    public function getSurveyHistoryFromDB($employerID, $month, $year)
    {
        $startDate = date($year.'-'.$month.'-01');
        $endDate =   date($year.'-'.$month.'-t');
        

        $result = DB::select("SELECT user_name, full_name, designation, meaninglessness, exhaustion, demotivation, avg_result, feeling FROM surveys As s, employees AS e WHERE e.employer_id = s.employer_id AND e.id = s.employee_id  AND s.employer_id = $employerID  AND e.status='Enable' AND s.date BETWEEN '$startDate' AND '$endDate'");
        return $result;
    }

    public function getDateOfLastSurvey()
    {
        
        $result = DB::select("SELECT `date` FROM `surveys` ORDER BY id DESC LIMIT 1");
        //echo mysqli_num_rows($result[0]);
        if (empty($result)) {
            return date('Y-m-01');
            
        } else {
            return date($result[0]->date);
        }
        
    }

    public function updateIsSurveyDoneThisMonthofEmployees()
    {
        DB::UPDATE("UPDATE `employees` SET `isSurveyDoneThisMonth`= 'n'");
    }
     
}
