<?php

class araclar_model extends CI_Model
{
    public $tableName='';

    public function __construct()
    {
        //model içindeki ortak değişkenlerin tanımlandığı bölüm.
        parent::__construct();
        $this->tableName='tbl_araclar';
    }
    public function GetAll()
    {
        //tüm araçları getirir
        return $this->db->get($this->tableName)->result();
    }
}
