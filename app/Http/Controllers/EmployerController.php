<?php

namespace App\Http\Controllers;

use App\Employer;
use Request;
use Mail;
use OrderShipped;

session_start();

class EmployerController extends Controller
{
    public function addEmployer(\Illuminate\Http\Request $request)
    {  
        $employer = new Employer();

        //getting data from Form 
        $user_name = Request::post('user_name');
        $email = Request::post('email');
        $company_name = Request::post('company_name');
        $password = Request::post('password');
        $confirm_password = Request::post('confirm_password');

        //saving data temporary
        $_SESSION['temp_user_name'] = $user_name;
        $_SESSION['temp_email'] = $email;
        $_SESSION['temp_company_name'] = $company_name;
        $_SESSION['temp_password'] = $password;

        
        $result = $employer->isUserNameExist($user_name);
        $result2 = $employer->isEmailExist($email);

        if(isset($result[0])){
            $_SESSION['message'] = "user name already exist";
            $_SESSION['message_email'] = "";

            return redirect("registration");
        } else {
            if(isset($result2[0])){
                $_SESSION['message_email'] = "Email already exist";
                $_SESSION['message'] = "";

                return redirect("registration");
            } else {
                
                $employer->company_name = $company_name;
                $employer->user_name = $user_name;
                $employer->email = $email;
                $employer->password = $password;
                
                $employer->save();
                
                $_SESSION['message'] = "";
                $_SESSION['message_email'] = "";
                $_SESSION['user_name'] = $user_name;
                $_SESSION['company_name'] = $company_name;
                $_SESSION['employer_id'] = $employer->id;

                $_SESSION['alert'] = "jhfgjhg";
                return redirect("employerHome1");   
                //return redirect()->with('alert', 'Updated!');
            }
            
             
        }

        
    }

    public function updateEmployer(\Illuminate\Http\Request $request)
    {  
        $employer = Employer::find($_SESSION['employer_id']);
        $company_name = Request::post('company_name');
        $email = Request::post('email');
        $password = Request::post('password');
        $confirm_password = Request::post('confirm_password');

        $result = $employer->isEmailExist($email);
        
        
        if ($password == $confirm_password) {
            $employer->company_name = $company_name;
            $employer->email = $email;
            $employer->password = $password;
            
            $employer->save();

            $_SESSION['message_email'] = "";
            $_SESSION['message'] = "";
            $_SESSION['message_password'] = "";


            return redirect("employerProfile");

        } else {
            $_SESSION['message_email'] = "";
            $_SESSION['message'] = "";
            $_SESSION['message_password'] = "Password does not match";

            return redirect("employerProfile");
        }

        

        
    }

    public function searchEmployer($user_name){

        $employer = new Employer();
        $result = $employer->isUserNameExist($user_name);
        return $result;
    }

    public function employerLogin()
    {
        $employer = new Employer();

        $userName = Request::get('user_name');
        $password = Request::get('password');

        $result = $employer->userLogin($userName, $password);
        // return $result;

        if(isset($result[0])){
            $_SESSION['employer_id'] = $result[0]->id;
            $_SESSION['user_name'] = $result[0]->user_name;
            $_SESSION['company_name'] = $result[0]->company_name;
            $_SESSION['email'] = $result[0]->email;
            $_SESSION['password'] = $result[0]->password;
            $_SESSION['flag'] = 1;
            $_SESSION['message_login'] = '';
            return redirect("employerHome1");

        } else{
            $_SESSION['message_login'] = 'Incorrect Username or Password ...';
            return redirect("login");
            
        }
    }
}
