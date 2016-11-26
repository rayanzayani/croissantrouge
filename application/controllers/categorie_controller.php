<?php

class Categorie_Controller extends InnovAdmin_Controller {

	public function action_index() {
		$ev = Innov_Model::factory('Categorie')->order_by_asc('nomCategorie')->find_many();
		$this->set('ev',$ev);
		if(!empty($_POST)){

			$ev = Innov_Model::factory( 'Categorie' )->where_like('nomCategorie',$value= Input::get('filtre'))->find_many();
			$this->set ( 'ev', $ev );
		}

	}

	
	public function action_addCat(){

		$ev = Innov_Model::factory('Categorie')->find_one(Input::get('id'));
		if (!$ev) {
			$ev = Innov_Model::factory ( 'Categorie' )->create ();
		}
		
		$ev->nomCategorie = Input::get('nomCategorie');
		$ev->description = Input::get('description');

		$ev->save();
		Flash::add('success','categorie ajouté avec succès!');
		Redirect::to('categorie','index');
	}
    	public function action_del($id)
	{
		$ev = Innov_Model::factory('Categorie')->find_one($id);
		$ev->delete();
		Redirect::To('Categorie', 'index');
	}
    
    	public function action_edit($id) {

		$ev = Innov_Model::factory('Categorie')->find_one($id);
		if (!$ev) {
			$ev = Innov_Model::factory ( 'Categorie' )->create ();
		}
		$this->set ( 'ev', $ev );
	}

}