<?php

class Contact_Controller extends Innov_Controller {

	public function action_index() {
		$socials = Innov_Model::factory ( 'Socials' )->find_one ();
		$this->set ('socials', $socials);
		$info = Innov_Model::factory ( 'Info' )->find_one ();
		$this->set ('info', $info);
	}

	public function action_contact(){
		
	}
	
}