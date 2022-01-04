<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class AjoutProduit extends CI_Controller {

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
	public function index()
	{
		$bdd = mysqli_connect("localhost", "root", "", "vente");

        $idProduit=$_GET['idProduit'];
        //$labelProduit=$_GET['labelProduit'];
        //$prixUnitaireProduit=$_GET['prixUnitaireProduit'];
        $descriptionProduit=$_GET['descriptionProduit'];
        $quantiteProduit=$_GET['quantiteProduit'];

		$idBonLivraison=1;
		$idEquivalence=1;
		$dateToday = date('Y-m-d');

		$this->db->query("insert into bonlivraisondetail values(null,".$idBonLivraison.",".$idProduit.",".$idEquivalence.",".$quantiteProduit.",'".$dateToday."','".$descriptionProduit."')");

		//echo("insert into bonlivraisondetail values(null,".$idBonLivraison.",".$idProduit.",".$idEquivalence.",".$quantiteProduit.",'".$dateToday."','".$descriptionProduit."')");
	}
}
