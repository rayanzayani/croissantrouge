<?php

class Volantaire_Controller extends InnovAdmin_Controller {

	public function action_index() {
		/*$vol = Innov_Model::factory('Volantaire')->find_many();
		$this->set('vol',$vol);*/
		if(!empty($_POST)){
			$email = Input::get('filtre');
			$vol = Innov_Model::factory ( 'Volantaire' )->raw_query('SELECT v.* FROM volantaire v where v.email LIKE :email', array('email' => $email))->find_many();
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

		$vol->save ();

		Flash::add ( 'success', 'les données sont mises à jour avec succès' );
		Redirect::To ( 'volantaire', 'index' );
	}

}