<?php 
defined('BASEPATH') OR exit('No direct script access allowed');
                        
class Data_master_model extends CI_Model 
{
    public function select()
    {
		$query = $this->db->get('tb_siswa');
		return $query;
    }    
	public function import($query)
    {
		$insert = $this->db->query($query);
		return $insert;
    }    
	public function select_guru()
    {
		$query = $this->db->get('tb_guru');
		return $query;
    }    
	public function import_guru($query)
    {
		$insert = $this->db->query($query);
		return $insert;
    }
	public function select_laptop_siswa()
    {
		$this->db->select('*');
		$this->db->from('tb_laptop_siswa');
		$this->db->join('tb_siswa', 'tb_siswa.id_siswa = tb_laptop_siswa.id_siswa','left');
		$query = $this->db->get();
		return $query;
    }    
	public function import_laptop_siswa($query)
    {
		$insert = $this->db->query($query);
		return $insert;
    }  
	public function select_laptop_peminjaman()
    {
		$query = $this->db->get('tb_laptop_peminjaman');
		return $query;
    }    
	public function import_laptop_peminjaman($query)
    {
		$insert = $this->db->query($query);
		return $insert;
    }                      
                        
}


/* End of file Data_master_model.php and path \application\models\Data_master_model.php */
