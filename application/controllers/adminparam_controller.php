<?php

class adminparam_Controller extends InnovAdmin_Controller {

	public function action_index() {
		$id   = 1;
		$user = Innov_Model::factory ( 'Utilisateur' )->find_one ( $id );
		if (!$user) {
			$user = Innov_Model::factory ( 'Utilisateur' )->create ();
		}
		$user->mdp = "";
		$this->set ( 'utilisateur', $user );
	}
	
	public function action_update() {
	$this->render = false;
		$validator = new Validation ();
		$rules = array (
				'login' 		=> 'required',
				'mdp' 		=> 'required',
		);
		$validated = $validator->validate ( $_POST, $rules );
		if ($validated !== TRUE) {
			Flash::add ( 'error', $validator->get_readable_errors ( true ) );
			Redirect::To ( 'adminparam', 'index' );
		}
		else {
			$id = 1;
			$user = Innov_Model::factory ( 'Utilisateur' )->find_one ( $id );
			if (!$user) {
				$user = Innov_Model::factory ( 'Utilisateur' )->create ();
			}
			$user->login 	= Input::get ( 'login' );
			$user->mdp 		= md5(Input::get ( 'mdp' ));
			
			$user->save ();
			
			Flash::add ( 'success', 'les données sont mises à jour avec succès' );
			
			Redirect::To ( 'adminparam', 'index' );
		}
		
		
	}
}