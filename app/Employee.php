<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;




class Employee extends Model
{

	public function isUserNameExist($userName, $employerID){
    	$result = Employee::where('user_name', '=', $userName)->where('employer_id', '=', $employerID)->get();
    	return $result;
    }

    


    public function isEmailExist($email, $employerID){
        $result = Employee::where('email', '=', $email)->where('employer_id', '=', $employerID)->get();
        return $result;
    }

    public function getEmployeeByUserName($userName, $employerID)
    {
    	$result = DB::select("SELECT * FROM employees WHERE user_name = '$userName' AND employer_id = $employerID ");
        return $result;
    }

    public function updateIsSurveyDoneThisMonth($employeeID, $employerID)
    {
        DB::UPDATE("UPDATE `employees` SET isSurveyDoneThisMonth='y' WHERE id = $employeeID AND employer_id = $employerID");
    }

    public function userLogin($employeeID, $userName, $password){
        $results = Employee::where('employer_id', '=', $employeeID)
            ->where('password', '=', $password)->where('user_name', '=', $userName)->where('status', '=', 'Enable')->get();
        return $results;
    }
}
