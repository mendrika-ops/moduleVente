<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class AjouteDetail extends CI_Controller
{

    public function index()
	{
		// $this->load->view('welcome_message');
        $this->load->model('BonLiv');     
        $this->load->view('Formulaire');
	}
    public function ajoute()
    {
        $this->load->model('BonLiv');
        $this->BonLiv->ajouteDetail($this->session->userdata('$idBonLivraison'),$this->input->get('$idProduit'),$this->input->get('quantite'));
        $this->load->view('Recherche',null);
    }
}