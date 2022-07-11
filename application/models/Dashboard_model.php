<?php 
defined('BASEPATH') OR exit('No direct script access allowed');
                        
class Dashboard_model extends CI_Model 
{
    public function count_laptop_siswa()
    {
		$result = $this->db->count_all('tb_laptop_siswa');
		return $result;
    }   
	public function count_laptop_peminjaman()
    {
		$result = $this->db->count_all('tb_laptop_peminjaman');
		return $result;
    } 
	public function count_siswa()
    {
		$result = $this->db->count_all('tb_siswa');
		return $result;
    }   
	public function count_guru()
    {
		$result = $this->db->count_all('tb_guru');
		return $result;
    }                       
                        
}


/* End of file Dashboard_model.php and path \application\models\Dashboard_model.php */
