<?php defined('BASEPATH') OR exit('No direct script access allowed');
class Contacto extends CI_Controller {

        public function index()
        {
                //echo 'Hello World!!!!!!';
                $data['nombre']='Felipe S.';

                $this->load->view('lista_vistas2',$data);
        }
}
