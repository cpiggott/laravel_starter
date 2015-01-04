<?php

class UserController extends BaseController {

	public function getSignIn(){

		// If the user is already logged in, then there is no need for us to show them the login screen
		if(Auth::check()){

			return Redirect::to('')->with('success', 'You are already logged in!');
		}

		return View::make('users.login');
	}



	public function postSignIn()
    {
        // Get all the inputs
        // id is used for login, username is used for validation to return correct error-strings
       

        $email = Input::get('email');
		$password = Input::get('password');

		$validator = Validator::make(
			array(
				'email' => $email,
				'password' => $password
			), 
			array(
				'email' => 'required|email',
				'password' => 'required|min:8'
			)
		);

		//Validate that the inputs are correct
		if($validator->passes()){

	        // Try to log the user in.
	        if (Auth::attempt(array('email'=> $email, 'password'=> $password)))
	        {
	            // Redirect to homepage
	            return Redirect::to('')->with('success', 'You have logged in successfully');
	        }
	        else
	        {
	            // Redirect to the login page.
	            return Redirect::to('signin')->withErrors(array('password' => 'Password invalid'))->withInput(Input::except('password'));
	        }
	    }
	        

        // Something went wrong.
        return Redirect::to('signin')->withErrors($validator)->withInput(Input::except('password'));
    }

    public function getSignOut(){
    	Auth::logout();

    	return Redirect::to('')->with('success', 'You are logged out');
    }


}