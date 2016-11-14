<?php

class Evenement_Controller extends InnovAdmin_Controller {

	public function action_index() {
		//$ev = Innov_Model::factory('Evenement')->find_many();
		//$this->set('ev',$ev);
		if(!empty($_POST)){

			//$vol = Innov_Model::factory ( 'Volantaire' )->raw_query('SELECT * FROM volantaire  where email LIKE :email', array('email' => Input::get('filtre')))->find_many();
			$ev = Innov_Model::factory( 'Evenement' )->where_like('nom',$value= Input::get('filtre'))->find_many();
			$this->set ( 'ev', $ev );
		}

	}



	
	public function action_addEv(){

		$ev = Innov_Model::factory('Evenement')->find_one(Input::get('id'));
		if (!$ev) {
			$ev = Innov_Model::factory ( 'Evenement' )->create ();
		}
		


		$ev->nom = Input::get('nom');
		$ev->description = Input::get('description');
		$ev->dateEv = Input::get('dateEv');

		$ev->url = Input::get('url');

		$ev->localisation = Input::get('localisation');
		$ev->etat = Input::get('etat');
		$today = new DateTime();
		$ev->dateAj = $today->format('Y-m-d H:i:s');

		$ev->save();
		Flash::add('success','événement ajouté avec succès!');
		Redirect::to('evenement','index');
	}

	public function action_del($id)
	{
		$ev = Innov_Model::factory('Evenement')->find_one($id);
		$ev->delete();
		Redirect::To('evenement', 'index');
	}

	public function action_edit($id) {

		$ev = Innov_Model::factory('Evenement')->find_one($id);
		if (!$ev) {
			$ev = Innov_Model::factory ( 'Evenement' )->create ();
		}
		$this->set ( 'ev', $ev );
	}
	
}