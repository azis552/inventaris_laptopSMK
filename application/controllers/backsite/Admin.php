<?php 
defined('BASEPATH') OR exit('No direct script access allowed');
use PhpOffice\PhpSpreadsheet\Spreadsheet;
use PhpOffice\PhpSpreadsheet\Writer\Xlsx;  


class Admin extends CI_Controller {

    public function __construct()
    {
		
        parent::__construct();
		$this->load->model("data_master_model");
		$this->load->model("dashboard_model");
		session_start();
    }
    public function index()
    {
		$config['page'] = 'Dashboard';
		$data['data_laptop_siswa'] = $this->dashboard_model->count_laptop_siswa();
		$data['data_laptop_peminjaman'] = $this->dashboard_model->count_laptop_peminjaman();
		$data['data_siswa'] = $this->dashboard_model->count_siswa();
		$data['data_guru'] = $this->dashboard_model->count_guru();
        $this->load->view('backsite/template/header');
		$this->load->view('backsite/template/sidebar',$config);
		$this->load->view('backsite/pages/dashboard',$data);
		$this->load->view('backsite/template/footer');
    }
	public function data_siswa()
    {
		$config['page'] = 'Data Siswa';
		$data['link_import'] = base_url('').'backsite/admin/import_data_siswa';
		$data['link_reset'] = base_url('').'backsite/admin/reset_data_siswa';
		$data['data_siswa'] = $this->data_master_model->select()->result();
        $this->load->view('backsite/template/header');
		$this->load->view('backsite/template/sidebar',$config);
		$this->load->view('backsite/pages/data_master/data_siswa',$data);
		$this->load->view('backsite/template/footer');
    }
	public function import_data_siswa()
	{
		$file_mimes = array('text/x-comma-separated-values', 'text/comma-separated-values', 'application/octet-stream', 'application/vnd.ms-excel', 'application/x-csv', 'text/x-csv', 'text/csv', 'application/csv', 'application/excel', 'application/vnd.msexcel', 'text/plain', 'application/vnd.openxmlformats-officedocument.spreadsheetml.sheet');
		if(isset($_FILES['upload_file']['name']) && in_array($_FILES['upload_file']['type'], $file_mimes)) {
		$arr_file = explode('.', $_FILES['upload_file']['name']);
		$extension = end($arr_file);
		if('csv' == $extension){
		$reader = new \PhpOffice\PhpSpreadsheet\Reader\Csv();
		} else {
		$reader = new \PhpOffice\PhpSpreadsheet\Reader\Xlsx();
		}
		$spreadsheet = $reader->load($_FILES['upload_file']['tmp_name']);
		$sheetData = $spreadsheet->getActiveSheet()->toArray();
		
		$insert = 0;
		$gagal = 0;
		for($i = 1;$i < count($sheetData);$i++)
			{
				$query1 = "insert ignore into tb_siswa (id_siswa,nama_siswa,kelas_siswa) values (";
				for($j = 0; $j < count($sheetData[$i]);$j++){
					if((count($sheetData[$i])-5) - $j == 1){
						$query1 .= '"'.$sheetData[$i][$j].'"';
					}else{
						if($j >2){

						}else{
						$query1 .= '"'.$sheetData[$i][$j].'",';
						}
					}
				}
				$query3 = ")";
				$query4 = " ON DUPLICATE KEY UPDATE 
				nama_siswa=VALUES(nama_siswa),
				kelas_siswa=VALUES(kelas_siswa)";
				
				$query = $query1.$query3.$query4;
				$import = $this->data_master_model->import($query);
				if($import){
					$insert++;
				}else{
					$gagal++;
				}
			}
			
			print_r("berhasil input : ".$insert."gagal : ".$gagal);
			$_SESSION["sukses"] = "Jumlah Data : ".$insert;
    
			//redirect ke halaman index.php
			header('Location: '.base_url('').'backsite/admin/data_siswa'); 
		}
	}
	public function reset_data_siswa()
	{
		$reset = $this->db->empty_table('tb_siswa');
		if($reset){
			$_SESSION["sukses"] = "Berhasil Reset Data";
		
				//redirect ke halaman index.php
			header('Location: '.base_url('').'backsite/admin/data_siswa'); 
		}else{
			$_SESSION["gagal"] = "Tidak Berhasil Reset Data";
		
				//redirect ke halaman index.php
			header('Location: '.base_url('').'backsite/admin/data_siswa'); 
		}
	}
	public function data_guru()
    {
		$config['page'] = 'Data Guru';
		$data['link_import'] = base_url('').'backsite/admin/import_data_guru';
		$data['link_reset'] = base_url('').'backsite/admin/reset_data_guru';
		$data['data_guru'] = $this->data_master_model->select_guru()->result();
        $this->load->view('backsite/template/header');
		$this->load->view('backsite/template/sidebar',$config);
		$this->load->view('backsite/pages/data_master/data_guru',$data);
		$this->load->view('backsite/template/footer');
    }
	public function import_data_guru()
	{
		$file_mimes = array('text/x-comma-separated-values', 'text/comma-separated-values', 'application/octet-stream', 'application/vnd.ms-excel', 'application/x-csv', 'text/x-csv', 'text/csv', 'application/csv', 'application/excel', 'application/vnd.msexcel', 'text/plain', 'application/vnd.openxmlformats-officedocument.spreadsheetml.sheet');
		if(isset($_FILES['upload_file']['name']) && in_array($_FILES['upload_file']['type'], $file_mimes)) {
		$arr_file = explode('.', $_FILES['upload_file']['name']);
		$extension = end($arr_file);
		if('csv' == $extension){
		$reader = new \PhpOffice\PhpSpreadsheet\Reader\Csv();
		} else {
		$reader = new \PhpOffice\PhpSpreadsheet\Reader\Xlsx();
		}
		$spreadsheet = $reader->load($_FILES['upload_file']['tmp_name']);
		$sheetData = $spreadsheet->getActiveSheet()->toArray();
		
		$insert = 0;
		$gagal = 0;
		for($i = 1;$i < count($sheetData);$i++)
			{
				$query1 = "insert ignore into tb_guru (id_guru,nama) values (";
				for($j = 0; $j < count($sheetData[$i]);$j++){
					if(count($sheetData[$i]) - $j == 1){
						$query1 .= '"'.$sheetData[$i][$j].'"';
					}else{
						$query1 .= '"'.$sheetData[$i][$j].'",';
					}
				}
				$query3 = ")";
				$query4 = " ON DUPLICATE KEY UPDATE 
				nama=VALUES(nama)";
				$query = $query1.$query3.$query4;
				$import = $this->data_master_model->import_guru($query);
				if($import){
					$insert++;
				}else{
					$gagal++;
				}
			}
			
			print_r("berhasil input : ".$insert."gagal : ".$gagal);
			$_SESSION["sukses"] = "Jumlah Data : ".$insert;
    
			//redirect ke halaman index.php
			header('Location: '.base_url('').'backsite/admin/data_guru'); 
		}
	}
	public function reset_data_guru()
	{
		$reset = $this->db->empty_table('tb_guru');
		if($reset){
			$_SESSION["sukses"] = "Berhasil Reset Data";
		
				//redirect ke halaman index.php
			header('Location: '.base_url('').'backsite/admin/data_guru'); 
		}else{
			$_SESSION["gagal"] = "Tidak Berhasil Reset Data";
		
				//redirect ke halaman index.php
			header('Location: '.base_url('').'backsite/admin/data_guru'); 
		}
	}
	public function data_laptop_siswa()
    {
		$config['page'] = 'Data Laptop Siswa';
		$data['link_import'] = base_url('').'backsite/admin/import_data_laptop_siswa';
		$data['link_reset'] = base_url('').'backsite/admin/reset_data_laptop_siswa';
		$data['data_laptop_siswa'] = $this->data_master_model->select_laptop_siswa()->result();
	
        $this->load->view('backsite/template/header');
		$this->load->view('backsite/template/sidebar',$config);
		$this->load->view('backsite/pages/data_master/data_laptop_siswa',$data);
		$this->load->view('backsite/template/footer');
    }
	
	public function import_data_laptop_siswa()
	{
		$file_mimes = array('text/x-comma-separated-values', 'text/comma-separated-values', 'application/octet-stream', 'application/vnd.ms-excel', 'application/x-csv', 'text/x-csv', 'text/csv', 'application/csv', 'application/excel', 'application/vnd.msexcel', 'text/plain', 'application/vnd.openxmlformats-officedocument.spreadsheetml.sheet');
		if(isset($_FILES['upload_file']['name']) && in_array($_FILES['upload_file']['type'], $file_mimes)) {
		$arr_file = explode('.', $_FILES['upload_file']['name']);
		$extension = end($arr_file);
		if('csv' == $extension){
		$reader = new \PhpOffice\PhpSpreadsheet\Reader\Csv();
		} else {
		$reader = new \PhpOffice\PhpSpreadsheet\Reader\Xlsx();
		}
		$spreadsheet = $reader->load($_FILES['upload_file']['tmp_name']);
		$sheetData = $spreadsheet->getActiveSheet()->toArray();
		
		$insert = 0;
		$gagal = 0;
		for($i = 1;$i < count($sheetData);$i++)
			{
				$query1 = "insert ignore into tb_laptop_siswa (id_siswa,id_laptop,merk,processor,ram,vga) values (";
				for($j = 0; $j < count($sheetData[$i]);$j++){
					if(count($sheetData[$i]) - $j == 1){
						if($sheetData[$i][$j] == ""){
							@$query5 = "select * from tb_laptop_siswa";
						}else{
							$query1 .= '"'.$sheetData[$i][$j].'"';
						}
					}else{
						if($sheetData[$i][$j] == ""){
							@$query5 = "select * from tb_laptop_siswa";
						}else{
							if($j >=1 && $j<= 2){

							}else{
							$query1 .= '"'.$sheetData[$i][$j].'",';
							}
						}
					}
				}
				$query3 = ")";
				$query4 = " ON DUPLICATE KEY UPDATE 
				id_siswa=VALUES(id_siswa),
				merk=VALUES(merk),
				processor=VALUES(processor),
				ram=VALUES(ram),
				vga=VALUES(vga)";
				if(@$query5 != ""){
					$query = @$query5;
				}else{
				$query = $query1.$query3.$query4;
				}
				
				$import = $this->data_master_model->import_guru($query);
				if($import){
					$insert++;
				}else{
					$gagal++;
				}
			}
			
			print_r("berhasil input : ".$insert."gagal : ".$gagal);
			$_SESSION["sukses"] = "Jumlah Data : ".$insert;
    
			//redirect ke halaman index.php
			header('Location: '.base_url('').'backsite/admin/data_laptop_siswa'); 
		}
	}
	public function reset_data_laptop_siswa()
	{
		$reset = $this->db->empty_table('tb_laptop_siswa');
		if($reset){
			$_SESSION["sukses"] = "Berhasil Reset Data";
		
				//redirect ke halaman index.php
			header('Location: '.base_url('').'backsite/admin/data_laptop_siswa'); 
		}else{
			$_SESSION["gagal"] = "Tidak Berhasil Reset Data";
		
				//redirect ke halaman index.php
			header('Location: '.base_url('').'backsite/admin/data_laptop_siswa'); 
		}
	}
	public function data_laptop_peminjaman()
    {
		$config['page'] = 'Data Laptop Peminjaman';
		$data['link_import'] = base_url('').'backsite/admin/import_data_laptop_peminjaman';
		$data['link_reset'] = base_url('').'backsite/admin/reset_data_laptop_peminjaman';
		$data['data_laptop_peminjaman'] = $this->data_master_model->select_laptop_peminjaman()->result();
        $this->load->view('backsite/template/header');
		$this->load->view('backsite/template/sidebar',$config);
		$this->load->view('backsite/pages/data_master/data_laptop_peminjaman',$data);
		$this->load->view('backsite/template/footer');
    }
	public function import_data_laptop_peminjaman()
	{
		$file_mimes = array('text/x-comma-separated-values', 'text/comma-separated-values', 'application/octet-stream', 'application/vnd.ms-excel', 'application/x-csv', 'text/x-csv', 'text/csv', 'application/csv', 'application/excel', 'application/vnd.msexcel', 'text/plain', 'application/vnd.openxmlformats-officedocument.spreadsheetml.sheet');
		if(isset($_FILES['upload_file']['name']) && in_array($_FILES['upload_file']['type'], $file_mimes)) {
		$arr_file = explode('.', $_FILES['upload_file']['name']);
		$extension = end($arr_file);
		if('csv' == $extension){
		$reader = new \PhpOffice\PhpSpreadsheet\Reader\Csv();
		} else {
		$reader = new \PhpOffice\PhpSpreadsheet\Reader\Xlsx();
		}
		$spreadsheet = $reader->load($_FILES['upload_file']['tmp_name']);
		$sheetData = $spreadsheet->getActiveSheet()->toArray();
		
		$insert = 0;
		$gagal = 0;
		for($i = 1;$i < count($sheetData);$i++)
			{
				$query1 = "insert ignore into tb_laptop_peminjaman (id_laptop,merk,processor,ram,vga) values (";
				for($j = 0; $j < count($sheetData[$i]);$j++){
					if(count($sheetData[$i]) - $j == 1){
						$query1 .= '"'.$sheetData[$i][$j].'"';
					}else{
						$query1 .= '"'.$sheetData[$i][$j].'",';
					}
				}
				$query3 = ")";
				$query4 = " ON DUPLICATE KEY UPDATE 
				merk=VALUES(merk),
				processor=VALUES(processor),
				ram=VALUES(ram),
				vga=VALUES(vga)";
				$query = $query1.$query3.$query4;
				$import = $this->data_master_model->import_laptop_peminjaman($query);
				if($import){
					$insert++;
				}else{
					$gagal++;
				}
			}
			
			print_r("berhasil input : ".$insert."gagal : ".$gagal);
			$_SESSION["sukses"] = "Jumlah Data : ".$insert;
    
			//redirect ke halaman index.php
			header('Location: '.base_url('').'backsite/admin/data_laptop_peminjaman'); 
		}
	}
	public function reset_data_laptop_peminjaman()
	{
		$reset = $this->db->empty_table('tb_laptop_peminjaman');
		if($reset){
			$_SESSION["sukses"] = "Berhasil Reset Data";
		
				//redirect ke halaman index.php
			header('Location: '.base_url('').'backsite/admin/data_laptop_peminjaman'); 
		}else{
			$_SESSION["gagal"] = "Tidak Berhasil Reset Data";
		
				//redirect ke halaman index.php
			header('Location: '.base_url('').'backsite/admin/data_laptop_peminjaman'); 
		}
	}
	
	public function cetak()
	{
		$style = array(
			'position' => '',
			'align' => 'C',
			'stretch' => false,
			'fitwidth' => true,
			'cellfitalign' => '',
			'border' => true,
			'hpadding' => 'auto',
			'vpadding' => 'auto',
			'fgcolor' => array(0,0,0),
			'bgcolor' => false, //array(255,255,255),
			'text' => true,
			'font' => 'helvetica',
			'fontsize' => 8,
			'stretchtext' => 4
		);
		$pdf = new TCPDF();                 // create TCPDF object with default constructor args
		$pdf->AddPage();                    // pretty self-explanatory
		if($_GET['table'] == "laptop_pinjaman"){
			$table = $this->db->get('tb_laptop_peminjaman')->result();
			foreach($table as $i){
				$pdf->Cell(0, 0, $i->merk." Proci : ".$i->processor." Ram : ".$i->ram." VGA : ".$i->vga, 0, 1);
				$pdf->Ln(2);
				$pdf->write1DBarcode($i->id_laptop, 'C39', '', '', '', 20, 0.4, $style, 'N');
	
				$pdf->Ln(2);
				
			}
			$pdf->lastPage();
			$pdf->Output('hello_world.pdf');    // send the file inline to the browser (default).
		}else{
			$this->db->select('*');
			$this->db->from('tb_laptop_siswa');
			$this->db->join('tb_siswa', 'tb_siswa.id_siswa = tb_laptop_siswa.id_siswa','left');
			$table  = $this->db->get()->result();
			foreach($table as $i){
				$pdf->Cell(0, 0, $i->id_laptop." " .$i->nama_siswa." ".$i->kelas_siswa, 0, 1);
				$pdf->write1DBarcode($i->id_siswa, 'C39', '', '', '', 18, 0.4, $style, 'N');
	
				$pdf->Ln(2);
			}
			
				$pdf->lastPage();
				$pdf->Output('hello_world.pdf');    // send the file inline to the browser (default).
		}
		
		
		
	}
	// transaksi

	public function laptop_siswa()
	{
		$config['page'] = 'Pengambilan Laptop Siswa';
		$data['data_laptop_peminjaman'] = $this->data_master_model->select_laptop_peminjaman()->result();
        $this->load->view('backsite/template/header');
		$this->load->view('backsite/template/sidebar',$config);
		$this->load->view('backsite/pages/transaksi/laptop_siswa',$data);
		$this->load->view('backsite/template/footer');
	}
}

/* End of file Admin.php and path \application\controllers\backsite\Admin.php */
