<?php 

class Data extends CI_Controller{
	public function __construct(){
		parent::__construct();
		$this->load->library(array('excel','session'));
	}

	public function index(){
        $data['judul'] = 'Data Kehadiran Masyarakat';
		$data['klasifikasi'] = $this->M_Klasifikasi->index('klasifikasi')->result_array();
		$this->load->view('template/header',$data);
		$this->load->view('template/sidebar');
		$this->load->view('data/import_excel',$data);
		$this->load->view('template/footer');
	}

	public function import_data(){
		if (isset($_FILES["fileExcel"]["name"])) {
				$path = $_FILES["fileExcel"]["tmp_name"];
				$object = PHPExcel_IOFactory::load($path);
				foreach($object->getWorksheetIterator() as $worksheet)
				{
					$highestRow = $worksheet->getHighestRow();
					$highestColumn = $worksheet->getHighestColumn();	
					for($row=2; $row<=$highestRow; $row++)
					{
						$jk = $worksheet->getCellByColumnAndRow(1, $row)->getValue();
						$stts_kawin = $worksheet->getCellByColumnAndRow(2, $row)->getValue();
						$alamat = $worksheet->getCellByColumnAndRow(3, $row)->getValue();
						$ktp = $worksheet->getCellByColumnAndRow(4, $row)->getValue();
						$pekerjaan = $worksheet->getCellByColumnAndRow(5, $row)->getValue();
						$jrk_rumah = $worksheet->getCellByColumnAndRow(6, $row)->getValue();
						$stts_keberadaan = $worksheet->getCellByColumnAndRow(7, $row)->getValue();
						$stts_kehadiran = $worksheet->getCellByColumnAndRow(8, $row)->getValue();
						$temp_data[] = array(
							'jenis_kelamin'	=> $jk,
							'status_perkawinan'	=> $stts_kawin,
							'alamat'	=> $alamat,
							'pekerjaan'	=> $pekerjaan,
							'ktp'	=> $ktp,
							'jarak_rumah'	=> $jrk_rumah,
							'stts_keberadaan' => $stts_keberadaan,
							'stts_kehadiran' => $stts_kehadiran
						); 	
					}
				}
				// var_dump($temp_data); die();
				$this->load->model('M_Klasifikasi');
				$insert = $this->M_Klasifikasi->insert($temp_data);
				if($insert){
					$this->session->set_flashdata('status', '<span class="glyphicon glyphicon-ok"></span> Data Berhasil di Import ke Database');
					redirect($_SERVER['HTTP_REFERER']);
				}else{
					$this->session->set_flashdata('status', '<span class="glyphicon glyphicon-remove"></span> Terjadi Kesalahan');
					redirect($_SERVER['HTTP_REFERER']);
				}
			}else{
				echo "Tidak ada file yang masuk";
			}
		}

		public function data_training(){
			$limit = 174;
			$data['judul'] = 'Data Training';
			$data['trainingtesting'] = $this->M_Klasifikasi->training('klasifikasi',$limit)->result_array();
			$this->load->view('template/header', $data);
			$this->load->view('template/sidebar');
			$this->load->view('data/klasifikasi', $data);
			$this->load->view('template/footer', $data);
		}

		public function data_testing(){
			$limit = 174;
			$data['judul'] = 'Data Testing';
			$data['trainingtesting'] = $this->M_Klasifikasi->testing('klasifikasi',$limit,75)->result_array();
			$this->load->view('template/header', $data);
			$this->load->view('template/sidebar');
			$this->load->view('data/klasifikasi', $data);
			$this->load->view('template/footer', $data);
		}

		public function tambahTesting(){

		$pekerjaan = 'pekerjaan';
			$data = [
			'getKerja' => $this->M_Klasifikasi->groupBy('klasifikasi',$pekerjaan)->result_array()
		];
			$this->load->view('template/header');
			$this->load->view('template/sidebar');
			$this->load->view('data/tambah_klasifikasi',$data);
			$this->load->view('template/footer');
		}

		public function tambahDataTesting(){
		
			$jk = $this->input->post('jk');
		$perkawinan = $this->input->post('perkawinan');
		$alamat = $this->input->post('alamat');
		$ktp = $this->input->post('ktp');
		$pekerjaan = $this->input->post('pekerjaan');
		$jarak = $this->input->post('jarak');
		$keberadaan = $this->input->post('keberadaan');
		$kehadiran = $this->input->post('kehadiran');
		$data = [
			'jenis_kelamin' => $jk,
			'status_perkawinan' => $perkawinan,
			'alamat' => $alamat,
			'ktp' => $ktp,
			'pekerjaan' => $pekerjaan,
			'jarak_rumah' => $jarak,
			'stts_keberadaan' => $keberadaan,
			'stts_kehadiran' => $kehadiran
		];
		//ubah data ke DB
		$this->M_Klasifikasi->tambah('klasifikasi',$data);
		//menampilkan halaman data kehadiran
		redirect('Data/data_testing');
		}

		public function ubahKehadiran($id){
		$data['judul'] = 'Ubah Kehadiran Masyarakat';
		$id_klasifikasi = ['id_klasifikasi' => $id];
		$data['klasifikasi'] = $this->M_Klasifikasi->getUbah('klasifikasi',$id_klasifikasi);
		$this->load->view('template/header', $data);
		$this->load->view('data/ubah_klasifikasi',$data);
		$this->load->view('template/footer');
	}

	public function ubahDataKehadiran(){
		//ambil data yang di post
		$id = $this->input->post('id');
		$jk = $this->input->post('jk');
		$perkawinan = $this->input->post('perkawinan');
		$alamat = $this->input->post('alamat');
		$ktp = $this->input->post('ktp');
		$pekerjaan = $this->input->post('pekerjaan');
		$jarak = $this->input->post('jarak');
		$keberadaan = $this->input->post('keberadaan');
		$kehadiran = $this->input->post('kehadiran');
		//siapkan data
		$where = [
            'id_klasifikasi' => $id
        ];
		$data = [
			'jenis_kelamin' => $jk,
			'status_perkawinan' => $perkawinan,
			'alamat' => $alamat,
			'ktp' => $ktp,
			'pekerjaan' => $pekerjaan,
			'jarak_rumah' => $jarak,
			'stts_keberadaan' => $keberadaan,
			'stts_kehadiran' => $kehadiran
		];
		//ubah data ke DB
		$this->M_Klasifikasi->ubahData($where, $data,'klasifikasi');
		//menampilkan halaman data kehadiran
		redirect('Klasifikasi');
	}

	public function hapusKehadiran($id){
		$id_klasifikasi = [
			'id_klasifikasi' => $id
		];
		$this->M_Klasifikasi->hapusData($id_klasifikasi,'klasifikasi');
		return redirect('Klasifikasi');
	}

	public function akurasi(){
		//jumlah data keseluruhan
		 $limit = 174;
		 $data['judul'] = 'Pengujian Akurasi';
		 $training = $this->M_Klasifikasi->training('klasifikasi',$limit)->result_array();
		 $data['training'] = count($training);
		 $testing = $this->M_Klasifikasi->testing('klasifikasi',$limit,75)->result_array();
		 $data['testing'] = count($testing);
		  
		 $this->load->view('template/header', $data);
		 $this->load->view('template/sidebar');
		 $this->load->view('data/akurasi', $data);
		 $this->load->view('template/footer');
	}
	public function cm_akurasi(){
		//post variabel rumus akurasi
		$data['judul'] = 'Hasil Pengujian Akurasi';
		 //input true positif dan true negatif dan total data
		$klasifikasi = $this->M_Klasifikasi->testing('klasifikasi',174,75)->result_array();
		 $jml_data = count($klasifikasi);
		 $jml_hadir = 63;
		 $jml_thadir = 12;
		 $tp_tn = $jml_hadir + $jml_thadir;
		 //rumus akurasi
		 $data['akurasi'] = $tp_tn/$jml_data*100;
		 $this->load->view('template/header',$data);
		 $this->load->view('template/sidebar');
		 $this->load->view('data/hasil_akurasi', $data);
		 $this->load->view('template/footer');
	}
}


 ?>