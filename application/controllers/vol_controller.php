<?php

class Vol_Controller extends Innov_Controller {

    public function action_index() {
        $socials = Innov_Model::factory ( 'Socials' )->find_one ();
        $this->set ('socials', $socials);
        $info = Innov_Model::factory ( 'Info' )->find_one ();
        $this->set ('info', $info);

    }

    public function action_ajoutVol(){
        $volantaire = Innov_Model::factory( 'Volantaire' )->create();
        $volantaire->cin = Input::get('cin');
        $volantaire->nom = Input::get('nom');
        $volantaire->prenom = Input::get('prenom');
        $volantaire->dateNaiss = Input::get('dateNaiss');
        $volantaire->email = Input::get('email');
        $volantaire->tel = Input::get('tel');


        $volantaire->save();
        Flash::add ( 'success', 'Vous êtes enregistrés' );
        Redirect::To ( 'vol/index');
    }

}