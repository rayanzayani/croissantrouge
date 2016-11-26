<?php

class Contact_Controller extends Innov_Controller {

	public function action_index() {
		$socials = Innov_Model::factory ( 'Socials' )->find_one ();
		$this->set ('socials', $socials);
		$info = Innov_Model::factory ( 'Info' )->find_one ();
		$this->set ('info', $info);
	}

	public function action_contact(){
		$contact = Innov_Model::factory('Contact')->create();

		$contact->nom = Input::get('nom');
		$contact->email = Input::get('email');
		$contact->tel = Input::get('tel');
		$contact->message = Input::get('message');
		$today = new DateTime();
		$contact->dateEnv = $today->format('Y-m-d H:i:s');

		$contact->save();
		Flash::add ( 'success', 'votre message a été bien envoyé' );
		Redirect::To ( 'contact', 'index' );
	}
	
}