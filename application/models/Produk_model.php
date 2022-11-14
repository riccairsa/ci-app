<?php  
  
class Produk_model extends CI_model {  
    public function getAllProduk()  
    {  
        return $this->db->get('produk')->result();  
    }  
 
    public function tambahDataProduk() 
    { 
        $data = [ 
            "nama produk" => $this->input->post('nama produk', true), 
            "kode produk" => $this->input->post('kode produk', true), 
            "harga produk" => $this->input->post('harga produk', true), 
            "jenis produk" => $this->input->post('jenis produk', true), 
        ]; 
 
        $this->db->insert('produk', $data); 
    } 
 
    public function hapusDataProduk($id) 
    { 
        //$this->db->where('id', $id); 
         
        $this->db->delete('produk', ['id' => $id]); 
    } 
 
    public function getProdukById($id) 
    { 
       return $this->db->get_where('produk', ['id' => $id])->row_array(); 
    } 
 
    public function ubahDataProduk() 
    { 
        $data = [ 
            "nama produk" => $this->input->post('nama produk', true), 
            "kode produk" => $this->input->post('kode produk', true), 
            "harga produk" => $this->input->post('harga produk', true), 
            "jenis produk" => $this->input->post('jenis produk', true), 
        ]; 
 
        $this->db->where('id', $this->input->post('id')); 
        $this->db->update('produk', $data); 
    } 
 
    public function cariDataMahasiswa() 
    { 
        $keyword = $this->input->post('keyword', true ); 
        $this->db->like('nama produk', $keyword); 
        $this->db->or_like('jenis produk', $keyword); 
        $this->db->or_like('kode produk', $keyword); 
        $this->db->or_like('harga produk', $keyword); 
        return $this->db->get('produk')->result_array(); 
    } 
 
}