<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Formulairevente extends CI_Controller
{

    public function index()
	{
		// $this->load->view('welcome_message');
        $this->load->view('Formulaire');
	}
    public function form()
    {
        $this->load->helper('form');
        $this->load->model('BonLiv');
        $data['Ref']=$this->BonLiv->RefBonCom();
        $this->load->view('Formulaire',$data);
    }
}