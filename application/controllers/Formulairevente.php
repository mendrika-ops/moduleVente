<?php


class Formulairevente extends CI_Controller
{
    public function form()
    {
        $this->load->helper('form');
        $this->load->model('BonLiv');
        $data['Ref']=$this->BonLiv->RefBonCom();
        $this->load->view('Formulaire',$data);
    }
}