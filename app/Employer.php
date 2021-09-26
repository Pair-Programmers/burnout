<?php

namespace App;

use Illuminate\Database\Eloquent\Model;



class Employer extends Model
{
    public function isUserNameExist($userName){
    	$result = Employer::where('user_name', '=', $userName)->get();
    	return $result;
    }

    public function isEmailExist($email){
        $result = Employer::where('email', '=', $email)->get();
        return $result;
    }

    public function userLogin($userName, $password){
    	$results = Employer::where('user_name', '=', $userName)
            ->where('password', '=', $password)->get();
        return $results;
    }

    public function getID($userName){
    	$result = Employer::where('user_name', '=', $userName)->get();
    	return $result;
    }
}
