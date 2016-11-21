<?php

class bien_Controller extends InnovAdmin_Controller {

	public function action_index() {
		$ev = Innov_Model::factory('biens')->find_many();
		$this->set('ev',$ev);
		if(!empty($_POST)){

			//$vol = Innov_Model::factory ( 'Volantaire' )->raw_query('SELECT * FROM volantaire  where email LIKE :email', array('email' => Input::get('filtre')))->find_many();
			$ev = Innov_Model::factory( 'biens' )->where_like('nomBien',$value= Input::get('filtre'))->find_many();
			$this->set ( 'ev', $ev );
		}

	}


	public function action_addBien(){

		$ev = Innov_Model::factory('biens')->find_one(Input::get('id'));
		if(! $ev) {
			$ev = Innov_Model::factory('biens')->create();
		}

			$ev->dateBien = Input::get('dateBien');
			$ev->nomBien = Input::get('nomBien');
			$ev->qteBien = Input::get('qteBien');

			$ev->save();
			Flash::add('success', 'biens ajouté avec succès!');
			Redirect::to('bien', 'index');

	}
	public function action_del($id)
	{
		$ev = Innov_Model::factory('biens')->find_one($id);
		$ev->delete();
		Redirect::To('bien', 'index');
	}


	public function action_edit($id) {

		$ev = Innov_Model::factory('biens')->find_one($id);
		if (!$ev) {
			$ev = Innov_Model::factory ( 'biens' )->create ();
		}
		$this->set ( 'ev', $ev );
	}
}