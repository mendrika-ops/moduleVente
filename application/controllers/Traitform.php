<?php


class Traitform extends CI_Controller
{
    public function insert()
    {
        $labelvente=$this->input->get('labelvente');
        $Ref=$this->input->get('Ref');
        $date=$this->input->get('date');
        $nif=$this->input->get('nif');
        $description=$this->input->get('description');
        $RefProform=$this->input->get('RefProform');

        $this->load->model('BonLiv');
        $idBonLivraison = $this->BonLiv->insert($labelvente,$Ref,$date,$nif,$description,$RefProform);
        $this->load->helper('form');
        $this->session->set_userdata('idBonL',$idBonLivraison);
        $data['Ref']=$this->BonLiv->RefBonCom();
        $this->load->view('Recherche',$data);
    }
}