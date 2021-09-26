<?php

namespace App\Http\Controllers;

use App\Employee;
use App\Employer;
use App\Survey;

use Request;

session_start();

class EmployeeController extends Controller
{
    public function addEmployee(\Illuminate\Http\Request $request)
    {  
        $employee = new Employee();
        
        $user_name = Request::post('user_name');
        $email = Request::post('email');
        $full_name = Request::post('full_name');
        $dob = Request::post('dob');
        $starting_date = Request::post('starting_date');
        $designation = Request::post('designation');
        $gender = Request::post('gender');
        $education = Request::post('education');
        $experience = Request::post('experience');
        $status = "Enable";
        $password = Request::post('password');
        $confirm_password = Request::post('confirm_pasword');

        $result = $employee->isUserNameExist($user_name, $_SESSION['employer_id']);
        $result2 = $employee->isEmailExist($email, $_SESSION['employer_id']);

        if(isset($result[0])){
            $_SESSION['message'] = "Username already exist";
            $_SESSION['message_email'] = "";
            $_SESSION['message_password'] = "";
            return redirect("addEmployee");
        } else {
            if(isset($result2[0])){
                $_SESSION['message_email'] = "Email already exist";
                $_SESSION['message'] = "";
                $_SESSION['message_password'] = "";
                return redirect("addEmployee");
            } else {
                
                 $employer_id = $_SESSION['employer_id'];
                

                    $employee->user_name = $user_name;
                    $employee->full_name = $full_name;
                    $employee->dob = $dob;
                    $employee->starting_date = $starting_date;
                    $employee->designation = $designation;
                    $employee->gender = $gender;
                    $employee->education = $education;
                    $employee->experience = $experience;
                    $employee->status = $status;
                    $employee->password = $password;
                    $employee->email = $email;
                    $employee->employer_id = $employer_id;
                    $employee->isSurveyDoneThisMonth = "n";

                    $employee->save();
                    $_SESSION['alert'] = "Employee Successfuly Added !";
                    $_SESSION['message_email'] = "";
                    $_SESSION['message'] = "";
                    $_SESSION['message_password'] = "";

                    


                    //return redirect("addEmployee");
                    return redirect()->back() ->with('alert', 'Successfully Addedd!');
                

            }
            
        }

        
    }

    public function updateEmployee(\Illuminate\Http\Request $request)
    {  
        $employeeUserName = Request::post('user_name');
        $full_name = Request::post('full_name');
        $dob = Request::post('dob');
        $starting_date = Request::post('starting_date');
        $designation = Request::post('designation');
        $gender = Request::post('gender');
        $education = Request::post('education');
        $experience = Request::post('experience');
        $status = "Enable";
        $password = Request::post('password');
        $email = Request::post('email');

        $employeeObj = new Employee();

        $result = $employeeObj->getEmployeeByUserName($employeeUserName, $_SESSION['employer_id']);


        $employee = Employee::find($result[0]->id);
        $result = $employee->isEmailExist($email, $_SESSION['employer_id']);

         


            $employee->full_name = $full_name;
            $employee->dob = $dob;
            $employee->starting_date = $starting_date;
            $employee->designation = $designation;
            $employee->gender = $gender;
            $employee->education = $education;
            $employee->experience = $experience;
            $employee->status = $status;
            $employee->password = $password;
            $employee->email = $email;
            if ($employee->isSurveyDoneThisMonth=="y") {
                $employee->isSurveyDoneThisMonth == "y";
                
            } else {
                $employee->isSurveyDoneThisMonth == "n";
            }
            $employee->save();

            $_SESSION['message_email'] = "";
            $_SESSION['message'] = "";
            $_SESSION['message_password'] = "";


            return redirect("updateEmployee");
         
                
        
        
        
        
       
    }

    public function updateEmployeePassword(\Illuminate\Http\Request $request)
    {  
        $employeeUserName = Request::post('user_name');

        $employeeObj = new Employee();
        $result = $employeeObj->getEmployeeByUserName($employeeUserName, $_SESSION['employer_id']);

        $employee = Employee::find($result[0]->id);

        $full_name = Request::post('full_name');
        $dob = Request::post('dob');
        $starting_date = Request::post('starting_date');
        $designation = Request::post('designation');
        $gender = Request::post('gender');
        $education = Request::post('education');
        $experience = Request::post('experience');
        $status = "Enable";
        $password = Request::post('password');
        $confirm_password = Request::post('confirm_pasword');
        $email = Request::post('email');
        
        if($password == $confirm_password) {
            $employee->full_name = $full_name;
            $employee->dob = $dob;
            $employee->starting_date = $starting_date;
            $employee->designation = $designation;
            $employee->gender = $gender;
            $employee->education = $education;
            $employee->experience = $experience;
            $employee->status = $status;
            $employee->password = $password;
            $employee->email = $email;
            if ($employee->isSurveyDoneThisMonth=="y") {
                $employee->isSurveyDoneThisMonth == "y";
                
            } else {
                $employee->isSurveyDoneThisMonth == "n";
            }
            
            $employee->save();
            $_SESSION['message_password'] = "";


            return redirect("employeeProfile");
        } else {
        
            $_SESSION['message_password'] = "Password does not match";

            return redirect("employeeProfile");
        }
        
        
    }

    public function disableOrEnableEmployee(\Illuminate\Http\Request $request)
    {  
        $employeeUserName = Request::post('user_name');

        $employeeObj = new Employee();
        $result = $employeeObj->getEmployeeByUserName($employeeUserName, $_SESSION['employer_id']);

        $employee = Employee::find($result[0]->id);

        $full_name = Request::post('full_name');
        $dob = Request::post('dob');
        $starting_date = Request::post('starting_date');
        $designation = Request::post('designation');
        $gender = Request::post('gender');
        $education = Request::post('education');
        $experience = Request::post('experience');
        $status = Request::post('status');
        $password = Request::post('password');
        $email = Request::post('email');
        
        
        
        $employee->full_name = $full_name;
        $employee->dob = $dob;
        $employee->starting_date = $starting_date;
        $employee->designation = $designation;
        $employee->gender = $gender;
        $employee->education = $education;
        $employee->experience = $experience;
        $employee->status = $status;
        $employee->password = $password;
        $employee->email = $email;
        if ($employee->isSurveyDoneThisMonth=="y") {
                $employee->isSurveyDoneThisMonth == "y";
                
            } else {
                $employee->isSurveyDoneThisMonth == "n";
            }
        
        $employee->save();



        return redirect("deleteEmployee");
    }

    public function searchEmployee($user_name){

        $employee = new Employee();
        $result = $employee->getEmployeeByUserName($user_name, $_SESSION['employer_id']);
        return $result;
    }

    public function searchEmployeeSurvey($user_name){

        $employee = new Employee();
        $result1 = $employee->getEmployeeByUserName($user_name, $_SESSION['employer_id']);
        $survey = new Survey();
        $result2 = $survey->getSurveyByEmployeeID($_SESSION['employer_id'], $result1[0]->id);
        
        
        return $result2;
    }

    


    public function employeeLogin()
    {
        //updateEmployeesForNextSurveyCheckEveryTime
        $survey = new Survey();
        $currentMonth = date('m');
        $lastMonth = date('m', strtotime($survey->getDateOfLastSurvey()));

        if($currentMonth != $lastMonth) {
            $survey->updateIsSurveyDoneThisMonthofEmployees();
        }
        //updateEmployeesForNextSurvey




        $employee = new Employee();
        $employer = new Employer();

        $employerUserName = Request::get('employer_user_name');
        $userName = Request::get('user_name');
        $password = Request::get('password');

        $result1 = $employer->getID($employerUserName);

    

        if(isset($result1[0])){

            $result2 = $employee->userLogin($result1[0]->id, $userName, $password);
           if(isset($result2[0])){
                $_SESSION['user_name'] = $result2[0]->user_name;//employee 
                $_SESSION['company_name'] = $result1[0]->company_name;
                $_SESSION['user_id'] = $result2[0]->id;//employee
                $_SESSION['employer_id'] = $result1[0]->id;
                $_SESSION['flag'] = 2;
                $_SESSION['message'] = '';
                
                if($result2[0]->isSurveyDoneThisMonth == "n"){
                    $_SESSION['message_survey'] = "";
                    return redirect("survey");
                } else {
                    $_SESSION['message_survey'] = "Already Done with Survey this Month !";
                    return redirect("doneSurvey");
                }
                
            } else{
                $_SESSION['message'] = 'Incorrect Employee Username or Password !';
                return redirect("employeelogin");
            }

        } else{
            $_SESSION['message'] = 'Incorrect Employer Username !';
            return redirect("employeelogin");
        }



        
    }

    

    
}
