<?php

class admininfo_Controller extends InnovAdmin_Controller {

    public function action_index() {
        $id   = 1;
        $info = Innov_Model::factory('Info')->find_one($id);
        $this->set('info',$info);
    }

    public function action_update() {
        $id = 1;
        $info = Innov_Model::factory ( 'Info' )->find_one ( $id );
        if (!$info) {
            $info = Innov_Model::factory ( 'Info' )->create ();
        }
        $info->addresse = Input::get ( 'addresse' );
        $info->tel = Input::get ( 'tel' );
        $info->url = Input::get ( 'url' );

        $info->save ();

        Flash::add ( 'success', 'Les données sont mises à jour avec succès' );

        Redirect::To ( 'admininfo', 'index' );
    }
}