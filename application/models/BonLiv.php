<?php


class BonLiv extends CI_Model
{

    public function RefBonCom()
    {
        $sql="select label,idBonDeCommande from bonDeCommande join proformat on bonDeCommande.idProformat = proformat.id";
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
    }
}