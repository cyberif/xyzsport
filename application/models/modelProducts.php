<?php
defined('BASEPATH') or exit('No direct script access allowed');

class modelProducts extends CI_Model
{

    public function getProduct()
    {
        return $this->db->get('products');
    }

    public function getWhereId($id_product)
    {
        return $this->db->get_where('products', ['id_product' => $id_product]);
    }

    public function insertProduct($data_siswa = null)
    {
        return $this->db->insert('products', $data_siswa);
    }

    public function deleteProduct($id_product = null)
    {
        return $this->db->delete('products', ['id_product' => $id_product]);
    }

    public function updateProduct($data_siswa = null)
    {
        $id_product = $this->input->post('id_product');
        return $this->db->update('products', $data_siswa, ['id_product' => $id_product]);
    }
}
