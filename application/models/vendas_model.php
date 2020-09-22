<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Vendas_model extends CI_Model {
    public function salva($venda) {
        $this->db->insert("vendas", $venda);
    }
}