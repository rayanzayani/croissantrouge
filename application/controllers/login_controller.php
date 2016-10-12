<?php

class login_Controller extends InnovAdmin_Controller {
	
	public function action_index() {
		
	}
	
	public function action_login() {
		$validator = new Validation();
		$rules = array(
			'login'    	=> 'required',
			'mdp'  => 'required',
		);
		$validated = $validator->validate($_POST, $rules);
		if($validated !== TRUE){
			
			Redirect::To('login', 'index');
		}else{
			if(Auth::login(Input::get('login'),Input::get('mdp'))){
				Redirect::To('admin', 'index');
			}else{
				Flash::add('error', 'vérifier votre login et/ou mot de passe!');
				Redirect::To('login', 'index');
			}
		}
	}
	
	public function action_logout() {
		Auth::logout(true);
		Redirect::To('login', 'index');
	}
	
	
}