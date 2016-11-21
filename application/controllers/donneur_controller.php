<?php

class Donneur_Controller extends InnovAdmin_Controller {

	public function action_index() {
		$don = Innov_Model::factory('Donneur')->order_by_asc('nom')->find_many();
		$this->set('don',$don);
		if(!empty($_POST)){

			//$vol = Innov_Model::factory ( 'Volantaire' )->raw_query('SELECT * FROM volantaire  where email LIKE :email', array('email' => Input::get('filtre')))->find_many();
			$don = Innov_Model::factory( 'Donneur' )->where_like('email',$value = Input::get('filtre'))->find_many();
			$this->set ( 'don', $don );
		}
	}
	
	
    public function action_del($id)
	{
		$don = Innov_Model::factory('Donneur')->find_one($id);
		$don->delete();
		Redirect::To('donneur', 'index');
	}

	public function action_edit($id) {

		$don = Innov_Model::factory('Donneur')->find_one($id);
		if (!$don) {
			$don = Innov_Model::factory ( 'Donneur' )->create ();
		}
		$this->set ( 'don', $don );
	}

	public function action_addDon(){

		$don = Innov_Model::factory('Donneur')->find_one(Input::get('id'));
		if (!$don) {
			$don = Innov_Model::factory ( 'Donneur' )->create ();
		}

		$don->cin = Input::get ( 'cin' );
		$don->nom = Input::get ( 'nom' );
		$don->prenom = Input::get ( 'prenom' );
		$don->dateNaiss = Input::get ( 'dateNaiss' );
		$don->email = Input::get ( 'email' );
		$don->tel = Input::get ( 'tel' );

		$don->save ();

		Flash::add ( 'success', 'le donneur a été ajouté avec succès!' );
		Redirect::To ( 'donneur', 'index' );
	}

}