<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Recherche extends CI_Model
{

    public function Result($label, $fabriq,$Pmin, $Pmax)
    {
        // $label='kidoro';
        // $fabriq='1';
        // $Pmin='0';
        // $Pmax='200000';
        $sql="SELECT * from produit where 1<2 ";
        if($label !=''){
            $sql .="AND label LIKE '%%%s%%' ";
            $sql=sprintf($sql ,mysql_real_escape_string($label));
        }
        if($fabriq  !=''){
            $sql .="AND idFabricant=".$fabriq." " ;
            // $sql=sprintf($sql,  $fabriq);/
        }
        if( $Pmin !='' && $Pmax!=''){
            $sql .="AND prixUnitaire BETWEEN ". $Pmin." AND ".$Pmax ;
        }
        // if()
        // echo $sql;
        $val=array();
        $indice=0;
        $stmt = $this->db->query($sql);
       if($stmt->num_rows() >0){
        foreach($stmt -> result_array() as $row)
        {
            foreach($row as $key => $value)
            {
                $val[$indice][$key] = $value;
            }
            $indice++;
        }
        return $val;
       }else{
        $val[0]['id']='----';
           $val[0]['label']='----';
           $val[0]['idFabricant']='----';
           $val[0]['prixUnitaire']='----';
           return $val;
           
       }
       
        
    }

   
}