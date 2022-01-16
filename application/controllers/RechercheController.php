<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class RechercheController extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
    public function __construct(){
		parent::__construct();
        $this->load->model('Recherche');

	}

	public function index()
	{
		 $this->load->view('Recherche');
         
		
        
	}
	public function recherche(){
		
		$data=array();
		// var_dump($result);
		 $label=$this->input->get('label');
		 $fabriq=$this->input->get('fabriq');
		 $Pmin=$this->input->get('Pmin');
		 $Pmax=$this->input->get('Pmax');
		$result=  $this->Recherche->Result( $label,$fabriq,$Pmin,$Pmax);
		
		$data['results']=$result;
		$this->load->view('Formulaire',$data);

	}
}