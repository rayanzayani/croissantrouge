<?php

class Volantaire_Controller extends InnovAdmin_Controller {

	public function action_index() {
		$vol = Innov_Model::factory('Volantaire')->order_by_asc('nom')->find_many();
		$this->set('vol',$vol);
		if(!empty($_POST)){

			//$vol = Innov_Model::factory ( 'Volantaire' )->raw_query('SELECT * FROM volantaire  where email LIKE :email', array('email' => Input::get('filtre')))->find_many();
			$vol = Innov_Model::factory( 'Volantaire' )->where_like('email',$value= Input::get('filtre'))->find_many();
			$this->set ( 'vol', $vol );
		}
	}

	public function action_del($id)
	{
		$vol = Innov_Model::factory('Volantaire')->find_one($id);
		$vol->delete();
		Redirect::To('volantaire', 'index');
	}

	public function action_edit($id) {

		$vol = Innov_Model::factory('Volantaire')->find_one($id);
		if (!$vol) {
			$vol = Innov_Model::factory ( 'Volantaire' )->create ();
		}
		$this->set ( 'vol', $vol );
	}

	public function action_addVol(){

		$vol = Innov_Model::factory('Volantaire')->find_one(Input::get('id'));
		if (!$vol) {
			$vol = Innov_Model::factory ( 'Volantaire' )->create ();
		}

		$vol->cin = Input::get ( 'cin' );
		$vol->nom = Input::get ( 'nom' );
		$vol->prenom = Input::get ( 'prenom' );
		$vol->dateNaiss = Input::get ( 'dateNaiss' );
		$vol->email = Input::get ( 'email' );
		$vol->tel = Input::get ( 'tel' );
		$today = new Date();
		$vol->dateAj = $today;

		$vol->save ();

		Flash::add ( 'success', 'les données sont mises à jour avec succès' );
		Redirect::To ( 'volantaire', 'index' );
	}

}