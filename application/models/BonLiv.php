<?php


class BonLiv extends CI_Model
{

    public function RefBonCom()
    {
        $sql="select * from bonDeCommande";
        $stmt = $this->db->query($sql);
        $val=array();
        $indice=0;
        foreach($stmt -> result_array() as $row)
        {
            foreach($row as $key => $value)
            {
                $val[$indice][$key] = $value;
            }
            $indice++;
        }
        return $val;
    }
    public function getProformat(){
        $sql="select * from proformat";
        $stmt = $this->db->query($sql);
        $val=array();
        $indice=0;
        foreach($stmt -> result_array() as $row)
        {
            foreach($row as $key => $value)
            {
                $val[$indice][$key] = $value;
            }
            $indice++;
        }
        return $val;
    }
    public function getBonLivraison($label){
        $sql="select * from bonlivrason where label='".$label."'";
       
        $stmt = $this->db->query($sql);
        $val=array();
        $indice=0;
        foreach($stmt -> result_array() as $row)
        {
            foreach($row as $key => $value)
            {
                $val[$indice][$key] = $value;
            }
            $indice++;
        }
       
        return $val;
    }
    public function insert($labelvente,$Ref,$date,$nif,$description,$RefProform)
    {
        $sql=sprintf("insert into bonLivrason(idBonDeCommande,idProformat,label,nif,dateBL,description) values (%u,%u,'%s','%s','%s','%s')",$Ref,$RefProform,$labelvente,$nif,$date,$description);
        $this->db->query($sql);
        return $this->getBonLivraison($labelvente)[0]['id'];
    }
}