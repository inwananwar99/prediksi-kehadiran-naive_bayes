<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Klasifikasi extends CI_Controller {
	
	public function perhitungan(){
		$input1 = $this->input->post('jk');
		$input2 = $this->input->post('perkawinan');
		$input3 = $this->input->post('alamat');
		$input4 = $this->input->post('ktp');
		$input5 = $this->input->post('pekerjaan');
		$input6 = $this->input->post('jarak');
		$input7 = $this->input->post('keberadaan');
		//parameter keseluruhan kueri 
		 $kolom = [
		 	'id_klasifikasi' => 'id_klasifikasi',
		 	'jenis_kelamin' => 'jenis_kelamin',
		 	'stts_kehadiran'=> 'stts_kehadiran',
		 	'status_perkawinan'=>'status_perkawinan',
		 	'alamat' => 'alamat',
		 	'ktp'=>'ktp',
		 	'pekerjaan'=>'pekerjaan',
		 	'jarak_rumah'=>'jarak_rumah',
		 	'stts_keberadaan'=>'stts_keberadaan'
		 ];
		 $nilai = [
		 	'Laki-laki' => 'Laki-laki',
		 	'Perempuan' => 'Perempuan',
		 	'Hadir' => 'Hadir',
		 	'Tidak Hadir'=>'Tidak Hadir',
		 	'Sudah Menikah'=>'Sudah Menikah',
		 	'Pisah'=>'Pisah',
		 	'Belum Menikah'=>'Belum Menikah'
		 ];
		 $alamat = [
		 	'Kp.transito' => 'Kp.transito',
		 	'Jl.transito' => 'Jl.transito',
		 	'Kp.ransito' => 'Kp.ransito',
		 	'Komplek.transmigrasi jl.transito' => 'Komplek.transmigrasi jl.transito',
		 	'Kp transito' => 'Kp transito',
		 	'Kp.transito perum.transmigrasi' => 'Kp.transito perum.transmigrasi',
		 	'Jl.transito.kp.transito' => 'Jl.transito.kp.transito',
		 	'Jl.transito perum.transito' => 'Jl.transito perum.transito',
		 	'Jl.transito kp.transito' => 'Jl.transito kp.transito',
		 	'taman transito' => 'taman transito',
		 	'Taman.transito' => 'Taman.transito'
		 ];
		 //jumlah data keseluruhan
		 $klasifikasi = $this->M_Klasifikasi->testing('klasifikasi',174,75)->result_array();
		 $jml_data = count($klasifikasi);
		 //jumlah data hadir & tidak hadir
		 $hadir = 63; 
		 $tdk_hadir = 12;
		 //Hitung jumlah kelas
		 $prob_hadir = $hadir/$jml_data;
		 $prob_tidakhadir = $tdk_hadir/$jml_data;

		//jenis kelamin laki hadir
		 $dataLakiHadir = $this->M_Klasifikasi->getKehadiran('klasifikasi',$kolom['jenis_kelamin'],$nilai['Laki-laki'],$kolom['id_klasifikasi'],174,$kolom['id_klasifikasi'],250,$kolom['stts_kehadiran'],$nilai['Hadir'])->result_array();
		 $jml_lk_hadir = count($dataLakiHadir);
		 
		 //laki-laki tidak hadir
		 $dataLakiTidakHadir = $this->M_Klasifikasi->getKehadiran('klasifikasi',$kolom['jenis_kelamin'],$nilai['Laki-laki'],$kolom['id_klasifikasi'],174,$kolom['id_klasifikasi'],250,$kolom['stts_kehadiran'],$nilai['Tidak Hadir'])->result_array();
		 $jml_lk_tdk_hadir = count($dataLakiTidakHadir);

		//rata-rata laki hadir dan tidak hadir
		 $jkl_h = $jml_lk_hadir/$hadir;
		 $jkl_th = $jml_lk_tdk_hadir/$tdk_hadir;

		//jenis kelamin perempuan hadir
		 $dataPrHadir = $this->M_Klasifikasi->getKehadiran('klasifikasi',$kolom['jenis_kelamin'],$nilai['Perempuan'],$kolom['id_klasifikasi'],174,$kolom['id_klasifikasi'],250,$kolom['stts_kehadiran'],$nilai['Hadir'])->result_array();
		 $jml_pr_hadir = count($dataPrHadir);

		 //perempuan tidak hadir
		 $dataPrTidakHadir = $this->M_Klasifikasi->getKehadiran('klasifikasi',$kolom['jenis_kelamin'],$nilai['Perempuan'],$kolom['id_klasifikasi'],174,$kolom['id_klasifikasi'],250,$kolom['stts_kehadiran'],$nilai['Tidak Hadir'])->result_array();
		 $jml_pr_tdk_hadir = count($dataPrTidakHadir);
		 
		 //rata-rata laki hadir dan tidak hadir
		 $jkp_h = $jml_pr_hadir/$hadir;
		 $jkp_th = $jml_pr_tdk_hadir/$tdk_hadir;

		//status perkawinan sudah menikah
		 $data_smenikah_h = $this->M_Klasifikasi->getKehadiran('klasifikasi',$kolom['status_perkawinan'],$nilai['Sudah Menikah'],$kolom['id_klasifikasi'],174,$kolom['id_klasifikasi'],250,$kolom['stts_kehadiran'],$nilai['Hadir'])->result_array();
		 $jml_smenikah_hadir = count($data_smenikah_h);
		 
		 $data_smenikah_th = $this->M_Klasifikasi->getKehadiran('klasifikasi',$kolom['status_perkawinan'],$nilai['Sudah Menikah'],$kolom['id_klasifikasi'],174,$kolom['id_klasifikasi'],250,$kolom['stts_kehadiran'],$nilai['Tidak Hadir'])->result_array();
		 $jml_smenikah_tdk_hadir = count($data_smenikah_th);
		 
		 //rata-rata sudah menikah
		 $stpk_sm_h = $jml_smenikah_hadir/$hadir; 
		 $stpk_sm_th = $jml_smenikah_tdk_hadir/$tdk_hadir;

		 //status perkawinan pisah
		 $data_pisah_h = $this->M_Klasifikasi->getKehadiran('klasifikasi',$kolom['status_perkawinan'],$nilai['Pisah'],$kolom['id_klasifikasi'],174,$kolom['id_klasifikasi'],250,$kolom['stts_kehadiran'],$nilai['Hadir'])->result_array();
		 $jml_pisah_h = count($data_pisah_h);
		 
		 $data_pisah_th = $this->M_Klasifikasi->getKehadiran('klasifikasi',$kolom['status_perkawinan'],$nilai['Pisah'],$kolom['id_klasifikasi'],174,$kolom['id_klasifikasi'],250,$kolom['stts_kehadiran'],$nilai['Tidak Hadir'])->result_array();
		 $jml_pisah_th = count($data_pisah_th);
		 
		 //rata-rata pisah
		 $stpk_p_h = $jml_pisah_h/$hadir;
		 $stpk_p_th = $jml_pisah_th/$tdk_hadir;

		 //status perkawinan belum menikah
		 $data_bm_h = $this->M_Klasifikasi->getKehadiran('klasifikasi',$kolom['status_perkawinan'],$nilai['Belum Menikah'],$kolom['id_klasifikasi'],174,$kolom['id_klasifikasi'],250,$kolom['stts_kehadiran'],$nilai['Hadir'])->result_array();
		 $jml_bm_h = count($data_bm_h);

		 $data_bm_th = $this->M_Klasifikasi->getKehadiran('klasifikasi',$kolom['status_perkawinan'],$nilai['Belum Menikah'],$kolom['id_klasifikasi'],174,$kolom['id_klasifikasi'],250,$kolom['stts_kehadiran'],$nilai['Tidak Hadir'])->result_array();
		 $jml_bm_th = count($data_bm_th);

		 //rata-rata belum menikah
		 $stpk_bm_h = $jml_bm_h/$hadir;
		 $stpk_bm_th = $jml_bm_th/$tdk_hadir;

		//alamat Kp.transito hadir
		 $data_trs1_h = $this->M_Klasifikasi->getKehadiran('klasifikasi',$kolom['alamat'],$alamat["Kp.transito"],$kolom['id_klasifikasi'],174,$kolom['id_klasifikasi'],250,$kolom['stts_kehadiran'],$nilai['Hadir'])->result_array();
		 $jml_trs1_h = count($data_trs1_h);

		 //alamat Kp.transito tidak hadir
		 $data_trs1_th = $this->M_Klasifikasi->getKehadiran('klasifikasi',$kolom['alamat'],$alamat['Kp.transito'],$kolom['id_klasifikasi'],174,$kolom['id_klasifikasi'],250,$kolom['stts_kehadiran'],$nilai['Tidak Hadir'])->result_array();
		 $jml_trs1_th = count($data_trs1_th);
		 //rata-rata H dan TH Kp.transito
		 $transito1_h = $jml_trs1_h/$hadir;
		 $transito1_th = $jml_trs1_th/$tdk_hadir;

		 //alamat Jl.transito hadir
		 $data_trs2_h = $this->M_Klasifikasi->getKehadiran('klasifikasi',$kolom['alamat'],$alamat['Jl.transito'],$kolom['id_klasifikasi'],174,$kolom['id_klasifikasi'],250,$kolom['stts_kehadiran'],$nilai['Hadir'])->result_array();
		 $jml_trs2_h = count($data_trs2_h);

		 //alamat Jl.transito tidak hadir
		 $data_trs2_th = $this->M_Klasifikasi->getKehadiran('klasifikasi',$kolom['alamat'],$alamat['Jl.transito'],$kolom['id_klasifikasi'],174,$kolom['id_klasifikasi'],250,$kolom['stts_kehadiran'],$nilai['Tidak Hadir'])->result_array();
		 $jml_trs2_th = count($data_trs2_th);

		 //rata-rata hadir dan tidak hadir Jl.transito
		 $transito2_h = $jml_trs2_h/$hadir;
		 $transito2_th = $jml_trs2_th/$tdk_hadir;

		 //alamat Kp.ransito hadir
		 $data_trs3_h = $this->M_Klasifikasi->getKehadiran('klasifikasi',$kolom['alamat'],$alamat['Kp.ransito'],$kolom['id_klasifikasi'],174,$kolom['id_klasifikasi'],250,$kolom['stts_kehadiran'],$nilai['Hadir'])->result_array();
		 $jml_trs3_h = count($data_trs3_h);

		 //alamat Kp.ransito tdk hadir
		 $data_trs3_th = $this->M_Klasifikasi->getKehadiran('klasifikasi',$kolom['alamat'],$alamat['Jl.transito'],$kolom['id_klasifikasi'],174,$kolom['id_klasifikasi'],250,$kolom['stts_kehadiran'],$nilai['Tidak Hadir'])->result_array();
		 $jml_trs3_th = count($data_trs3_th);

		 //rata-rata kehadiran Kp.ransito
		 $transito3_h = $jml_trs3_h/$hadir;
		 $transito3_th = $jml_trs3_th/$tdk_hadir;

		 //alamat Komplek.transmigrasi jl.transito hadir
		 $data_trs4_h = $this->M_Klasifikasi->getKehadiran('klasifikasi',$kolom['alamat'],$alamat['Komplek.transmigrasi jl.transito'],$kolom['id_klasifikasi'],174,$kolom['id_klasifikasi'],250,$kolom['stts_kehadiran'],$nilai['Hadir'])->result_array();
		 $jml_trs4_h = count($data_trs4_h);

		 //alamat Komplek.transmigrasi jl.transito tdk hadir
		 $data_trs4_th = $this->M_Klasifikasi->getKehadiran('klasifikasi',$kolom['alamat'],$alamat['Komplek.transmigrasi jl.transito'],$kolom['id_klasifikasi'],174,$kolom['id_klasifikasi'],250,$kolom['stts_kehadiran'],$nilai['Tidak Hadir'])->result_array();
		 $jml_trs4_th = count($data_trs4_th);

		 //rata-rata kehadiran Komplek.transmigrasi jl.transito tdk hadir
		 $transito4_h = $jml_trs4_h/$hadir;
		 $transito4_th = $jml_trs4_th/$tdk_hadir;

		 //alamat Kp transito hadir
		 $data_trs5_h = $this->M_Klasifikasi->getKehadiran('klasifikasi',$kolom['alamat'],$alamat['Kp transito'],$kolom['id_klasifikasi'],174,$kolom['id_klasifikasi'],250,$kolom['stts_kehadiran'],$nilai['Hadir'])->result_array();
		 $jml_trs5_h = count($data_trs5_h);

		 //alamat Kp transito tdk hadir
		 $data_trs5_th = $this->M_Klasifikasi->getKehadiran('klasifikasi',$kolom['alamat'],$alamat['Kp transito'],$kolom['id_klasifikasi'],174,$kolom['id_klasifikasi'],250,$kolom['stts_kehadiran'],$nilai['Tidak Hadir'])->result_array();
		 $jml_trs5_th = count($data_trs5_th);

		 //rata-rata kehadiran Kp transito
		 $transito5_h = $jml_trs5_h/$hadir;
		 $transito5_th = $jml_trs5_th/$tdk_hadir;

		 //alamat Kp.transito perum.transmigrasi hadir
		 $data_trs6_h = $this->M_Klasifikasi->getKehadiran('klasifikasi',$kolom['alamat'],$alamat['Kp.transito perum.transmigrasi'],$kolom['id_klasifikasi'],174,$kolom['id_klasifikasi'],250,$kolom['stts_kehadiran'],$nilai['Hadir'])->result_array();
		 $jml_trs6_h = count($data_trs6_h);

		 //alamat Kp.transito perum.transmigrasi tdk hadir
		 $data_trs6_th = $this->M_Klasifikasi->getKehadiran('klasifikasi',$kolom['alamat'],$alamat['Kp.transito perum.transmigrasi'],$kolom['id_klasifikasi'],174,$kolom['id_klasifikasi'],250,$kolom['stts_kehadiran'],$nilai['Tidak Hadir'])->result_array();
		 $jml_trs6_th = count($data_trs6_th);

		 //rata-rata kehadiran Kp.transito perum.transmigrasi
		 $transito6_h = $jml_trs6_h/$hadir;
		 $transito6_th = $jml_trs6_th/$tdk_hadir;

		 //alamat Jl.transito perum.transito hadir
		 $data_trs8_h = $this->M_Klasifikasi->getKehadiran('klasifikasi',$kolom['alamat'],$alamat['Jl.transito perum.transito'],$kolom['id_klasifikasi'],174,$kolom['id_klasifikasi'],250,$kolom['stts_kehadiran'],$nilai['Hadir'])->result_array();
		 $jml_trs8_h = count($data_trs8_h);

		 //alamat Jl.transito perum.transito tdk hadir
		 $data_trs8_th = $this->M_Klasifikasi->getKehadiran('klasifikasi',$kolom['alamat'],$alamat['Jl.transito perum.transito'],$kolom['id_klasifikasi'],174,$kolom['id_klasifikasi'],250,$kolom['stts_kehadiran'],$nilai['Tidak Hadir'])->result_array();
		 $jml_trs8_th = count($data_trs8_th);

		 //rata-rata kehadiran Jl.transito perum.transito
		 $transito8_h = $jml_trs8_h/$hadir;
		 $transito8_th = $jml_trs8_th/$tdk_hadir;

		  //alamat Jl.transito kp.transito hadir
		 $data_trs9_h = $this->M_Klasifikasi->getKehadiran('klasifikasi',$kolom['alamat'],$alamat['Jl.transito kp.transito'],$kolom['id_klasifikasi'],174,$kolom['id_klasifikasi'],250,$kolom['stts_kehadiran'],$nilai['Hadir'])->result_array();
		 $jml_trs9_h = count($data_trs9_h);

		 //alamat Jl.transito kp.transito tdk hadir
		 $data_trs9_th = $this->M_Klasifikasi->getKehadiran('klasifikasi',$kolom['alamat'],$alamat['Jl.transito kp.transito'],$kolom['id_klasifikasi'],174,$kolom['id_klasifikasi'],250,$kolom['stts_kehadiran'],$nilai['Tidak Hadir'])->result_array();
		 $jml_trs9_th = count($data_trs9_th);

		 //rata-rata kehadiran Jl.transito kp.transito
		 $transito9_h = $jml_trs9_h/$hadir;
		 $transito9_th = $jml_trs9_th/$tdk_hadir;
		 
		 //alamat taman transito hadir
		 $data_trs10_h = $this->M_Klasifikasi->getKehadiran('klasifikasi',$kolom['alamat'],$alamat['taman transito'],$kolom['id_klasifikasi'],174,$kolom['id_klasifikasi'],250,$kolom['stts_kehadiran'],$nilai['Hadir'])->result_array();
		 $jml_trs10_h = count($data_trs10_h);

		 //alamat taman transito tdk hadir
		 $data_trs10_th = $this->M_Klasifikasi->getKehadiran('klasifikasi',$kolom['alamat'],$alamat['taman transito'],$kolom['id_klasifikasi'],174,$kolom['id_klasifikasi'],250,$kolom['stts_kehadiran'],$nilai['Tidak Hadir'])->result_array();
		 $jml_trs10_th = count($data_trs10_th);

		 //rata-rata kehadiran taman transito
		 $transito10_h = $jml_trs10_h/$hadir;
		 $transito10_th = $jml_trs10_th/$tdk_hadir;

		 //alamat Taman.transito hadir
		 $data_trs11_h = $this->M_Klasifikasi->getKehadiran('klasifikasi',$kolom['alamat'],$alamat['Taman.transito'],$kolom['id_klasifikasi'],174,$kolom['id_klasifikasi'],250,$kolom['stts_kehadiran'],$nilai['Hadir'])->result_array();
		 $jml_trs11_h = count($data_trs11_h);

		 //alamat Taman.transito tdk hadir
		 $data_trs11_th = $this->M_Klasifikasi->getKehadiran('klasifikasi',$kolom['alamat'],$alamat['Taman.transito'],$kolom['id_klasifikasi'],174,$kolom['id_klasifikasi'],250,$kolom['stts_kehadiran'],$nilai['Tidak Hadir'])->result_array();
		 $jml_trs11_th = count($data_trs11_th);

		 //rata-rata kehadiran Taman.transito
		 $transito11_h = $jml_trs11_h/$hadir;
		 $transito11_th = $jml_trs11_th/$tdk_hadir;

 		//ktp sudah rekam hadir
		 $data_ktpk_h = $this->M_Klasifikasi->getKehadiran('klasifikasi',$kolom['ktp'],'Sudah Rekam',$kolom['id_klasifikasi'],174,$kolom['id_klasifikasi'],250,$kolom['stts_kehadiran'],$nilai['Hadir'])->result_array();
		 $jml_ktpk_h = count($data_ktpk_h);

		 //ktp sudah rekam tidak hadir
		 $data_ktpk_th = $this->M_Klasifikasi->getKehadiran('klasifikasi',$kolom['ktp'],'Sudah Rekam',$kolom['id_klasifikasi'],174,$kolom['id_klasifikasi'],250,$kolom['stts_kehadiran'],$nilai['Tidak Hadir'])->result_array();
		 $jml_ktpk_th = count($data_ktpk_th);

		 //rata-rata kehadiran rekam ktp
		 $ktpk_h = $jml_ktpk_h/$hadir;
		 $ktpk_th = $jml_ktpk_th/$tdk_hadir;

		//ktp belum rekam hadir
		 $data_ktpb_h = $this->M_Klasifikasi->getKehadiran('klasifikasi',$kolom['ktp'],'Belum Rekam',$kolom['id_klasifikasi'],174,$kolom['id_klasifikasi'],250,$kolom['stts_kehadiran'],$nilai['Hadir'])->result_array();
		 $jml_ktpb_h = count($data_ktpb_h);
		 
		 //ktp Belum rekam tidak hadir
		 $data_ktpb_th = $this->M_Klasifikasi->getKehadiran('klasifikasi',$kolom['ktp'],'Belum Rekam',$kolom['id_klasifikasi'],174,$kolom['id_klasifikasi'],250,$kolom['stts_kehadiran'],$nilai['Tidak Hadir'])->result_array();
		 $jml_ktpb_th = count($data_ktpb_th);

		 //rata-rata kehadiran rekam ktp
		 $ktpb_h = $jml_ktpb_h/$hadir;
		 $ktpb_th = $jml_ktpb_th/$tdk_hadir;

		//pekerjaan pns hadir
		 $data_pns_h = $this->M_Klasifikasi->getKehadiran('klasifikasi',$kolom['pekerjaan'],'PNS',$kolom['id_klasifikasi'],174,$kolom['id_klasifikasi'],250,$kolom['stts_kehadiran'],$nilai['Hadir'])->result_array();
		 $jml_pns_h = count($data_pns_h);

		 //pekerjaan pns tidak hadir
		 $data_pns_th = $this->M_Klasifikasi->getKehadiran('klasifikasi',$kolom['pekerjaan'],'PNS',$kolom['id_klasifikasi'],174,$kolom['id_klasifikasi'],250,$kolom['stts_kehadiran'],$nilai['Tidak Hadir'])->result_array();
		 $jml_pns_th = count($data_pns_th);

		 //rata-rata kehadiran pns
		 $pkp_h = $jml_pns_h/$hadir;
		 $pkp_th = $jml_pns_th/$tdk_hadir;

		 //pekerjaan Buruh hadir
		 $data_Buruh_h = $this->M_Klasifikasi->getKehadiran('klasifikasi',$kolom['pekerjaan'],'Buruh',$kolom['id_klasifikasi'],174,$kolom['id_klasifikasi'],250,$kolom['stts_kehadiran'],$nilai['Hadir'])->result_array();
		 $jml_Buruh_h = count($data_Buruh_h);

		 //pekerjaan Buruh tidak hadir
		 $data_Buruh_th = $this->M_Klasifikasi->getKehadiran('klasifikasi',$kolom['pekerjaan'],'Buruh',$kolom['id_klasifikasi'],174,$kolom['id_klasifikasi'],250,$kolom['stts_kehadiran'],$nilai['Tidak Hadir'])->result_array();
		 $jml_Buruh_th = count($data_Buruh_th);

		 //rata-rata kehadiran Buruh
		 $pkbur_h = $jml_Buruh_h/$hadir;
		 $pkbur_th = $jml_Buruh_th/$tdk_hadir;

		 //pekerjaan bumn hadir
		 $data_bumn_h = $this->M_Klasifikasi->getKehadiran('klasifikasi',$kolom['pekerjaan'],'BUMN',$kolom['id_klasifikasi'],174,$kolom['id_klasifikasi'],250,$kolom['stts_kehadiran'],$nilai['Hadir'])->result_array();
		 $jml_bumn_h = count($data_bumn_h);

		 //pekerjaan bumn tidak hadir
		 $data_bumn_th = $this->M_Klasifikasi->getKehadiran('klasifikasi',$kolom['pekerjaan'],'BUMN',$kolom['id_klasifikasi'],174,$kolom['id_klasifikasi'],250,$kolom['stts_kehadiran'],$nilai['Tidak Hadir'])->result_array();
		 $jml_bumn_th = count($data_bumn_th);

		 //rata-rata kehadiran bumn
		 $pkbum_h = $jml_bumn_h/$hadir;
		 $pkbum_th = $jml_bumn_th/$tdk_hadir;

		 //pekerjaan irt hadir
		 $data_irt_h = $this->M_Klasifikasi->getKehadiran('klasifikasi',$kolom['pekerjaan'],'IRT',$kolom['id_klasifikasi'],174,$kolom['id_klasifikasi'],250,$kolom['stts_kehadiran'],$nilai['Hadir'])->result_array();
		 $jml_irt_h = count($data_irt_h);

		 //pekerjaan irt tidak hadir
		 $data_irt_th = $this->M_Klasifikasi->getKehadiran('klasifikasi',$kolom['pekerjaan'],'IRT',$kolom['id_klasifikasi'],174,$kolom['id_klasifikasi'],250,$kolom['stts_kehadiran'],$nilai['Tidak Hadir'])->result_array();
		 $jml_irt_th = count($data_irt_th);

		 //rata-rata kehadiran irt
		 $pkir_h = $jml_irt_h/$hadir;
		 $pkir_th = $jml_irt_th/$tdk_hadir;

		 //pekerjaan mhs hadir
		 $data_mhs_h = $this->M_Klasifikasi->getKehadiran('klasifikasi',$kolom['pekerjaan'],'Mahasiswa',$kolom['id_klasifikasi'],174,$kolom['id_klasifikasi'],250,$kolom['stts_kehadiran'],$nilai['Hadir'])->result_array();
		 $jml_mhs_h = count($data_mhs_h);

		 //pekerjaan mhs tidak hadir
		 $data_mhs_th = $this->M_Klasifikasi->getKehadiran('klasifikasi',$kolom['pekerjaan'],'Mahasiswa',$kolom['id_klasifikasi'],174,$kolom['id_klasifikasi'],250,$kolom['stts_kehadiran'],$nilai['Tidak Hadir'])->result_array();
		 $jml_mhs_th = count($data_mhs_th);

		 //rata-rata kehadiran mhs
		 $pkm_h = $jml_mhs_h/$hadir;
		 $pkm_th = $jml_mhs_th/$tdk_hadir;

		 //pekerjaan pelajar hadir
		 $data_pelajar_h = $this->M_Klasifikasi->getKehadiran('klasifikasi',$kolom['pekerjaan'],'Pelajar',$kolom['id_klasifikasi'],174,$kolom['id_klasifikasi'],250,$kolom['stts_kehadiran'],$nilai['Hadir'])->result_array();
		 $jml_pelajar_h = count($data_pelajar_h);

		 //pekerjaan pelajar tidak hadir
		 $data_pelajar_th = $this->M_Klasifikasi->getKehadiran('klasifikasi',$kolom['pekerjaan'],'Pelajar',$kolom['id_klasifikasi'],174,$kolom['id_klasifikasi'],250,$kolom['stts_kehadiran'],$nilai['Tidak Hadir'])->result_array();
		 $jml_pelajar_th = count($data_pelajar_th);

		 //rata-rata kehadiran pelajar
		 $pkpl_h = $jml_pelajar_h/$hadir;
		 $pkpl_th = $jml_pelajar_th/$tdk_hadir;

		 //pekerjaan pensiunan pns hadir
		 $data_ppns_h = $this->M_Klasifikasi->getKehadiran('klasifikasi',$kolom['pekerjaan'],'Pensiunan PNS',$kolom['id_klasifikasi'],174,$kolom['id_klasifikasi'],250,$kolom['stts_kehadiran'],$nilai['Hadir'])->result_array();
		 $jml_ppns_h = count($data_ppns_h);

		 //pekerjaan pensiunan pns tidak hadir
		 $data_ppns_th = $this->M_Klasifikasi->getKehadiran('klasifikasi',$kolom['pekerjaan'],'Pensiunan PNS',$kolom['id_klasifikasi'],174,$kolom['id_klasifikasi'],250,$kolom['stts_kehadiran'],$nilai['Tidak Hadir'])->result_array();
		 $jml_ppns_th = count($data_ppns_th);

		 //rata-rata kehadiran ppns
		 $pkppn_h = $jml_ppns_h/$hadir;
		 $pkppn_th = $jml_ppns_th/$tdk_hadir;

		 //pekerjaan Swasta hadir
		 $data_swst_h = $this->M_Klasifikasi->getKehadiran('klasifikasi',$kolom['pekerjaan'],'Swasta',$kolom['id_klasifikasi'],174,$kolom['id_klasifikasi'],250,$kolom['stts_kehadiran'],$nilai['Hadir'])->result_array();
		 $jml_swst_h = count($data_swst_h);

		 //pekerjaan Swasta tidak hadir
		 $data_swst_th = $this->M_Klasifikasi->getKehadiran('klasifikasi',$kolom['pekerjaan'],'Swasta',$kolom['id_klasifikasi'],174,$kolom['id_klasifikasi'],250,$kolom['stts_kehadiran'],$nilai['Tidak Hadir'])->result_array();
		 $jml_swst_th = count($data_swst_th);
		 //rata-rata kehadiran ppns
		 $pkswst_h = $jml_swst_h/$hadir;
		 $pkswst_th = $jml_swst_th/$tdk_hadir;

		//jarak < 200
		 $data_jrkk_h = $this->M_Klasifikasi->getKehadiran('klasifikasi',$kolom['jarak_rumah'],'Kurang Dari 200 Meter',$kolom['id_klasifikasi'],174,$kolom['id_klasifikasi'],250,$kolom['stts_kehadiran'],$nilai['Hadir'])->result_array();
		 $jml_jrkk_h = count($data_jrkk_h);
		 $data_jrkk_th = $this->M_Klasifikasi->getKehadiran('klasifikasi',$kolom['jarak_rumah'],'Kurang Dari 200 Meter',$kolom['id_klasifikasi'],174,$kolom['id_klasifikasi'],250,$kolom['stts_kehadiran'],$nilai['Tidak Hadir'])->result_array();
		 $jml_jrkk_th = count($data_jrkk_th);
		 $jrkk_h = $jml_jrkk_h/$hadir;
		 $jrkk_th = $jml_jrkk_th/$tdk_hadir;

		 //jarak 200
		 $data_jrk_h = $this->M_Klasifikasi->getKehadiran('klasifikasi',$kolom['jarak_rumah'],'200 Meter',$kolom['id_klasifikasi'],174,$kolom['id_klasifikasi'],250,$kolom['stts_kehadiran'],$nilai['Hadir'])->result_array();
		 $jml_jrk_h = count($data_jrkk_h);
		 $data_jrk_th = $this->M_Klasifikasi->getKehadiran('klasifikasi',$kolom['jarak_rumah'],'200 Meter',$kolom['id_klasifikasi'],174,$kolom['id_klasifikasi'],250,$kolom['stts_kehadiran'],$nilai['Tidak Hadir'])->result_array();
		 $jml_jrk_th = count($data_jrkk_th);
		 $jrk_h = $jml_jrk_h/$hadir;
		 $jrk_th = $jml_jrk_th/$tdk_hadir;

		 //jarak > 200
		 $data_jrkl_h = $this->M_Klasifikasi->getKehadiran('klasifikasi',$kolom['jarak_rumah'],'Lebih dari 200 Meter',$kolom['id_klasifikasi'],174,$kolom['id_klasifikasi'],250,$kolom['stts_kehadiran'],$nilai['Hadir'])->result_array();
		 $jml_jrkl_h = count($data_jrkl_h);
		 $data_jrkl_th = $this->M_Klasifikasi->getKehadiran('klasifikasi',$kolom['jarak_rumah'],'Lebih dari 200 Meter',$kolom['id_klasifikasi'],174,$kolom['id_klasifikasi'],250,$kolom['stts_kehadiran'],$nilai['Tidak Hadir'])->result_array();
		 $jml_jrkl_th = count($data_jrkl_th);
		 $jrkl_h = $jml_jrkl_h/$hadir; 
		 $jrkl_th = $jml_jrkl_th/$tdk_hadir;

		//keberadaan tanjungpinang
		 $data_tjp_h = $this->db->query("SELECT * FROM `klasifikasi` WHERE stts_keberadaan ='Tanjungpinang' AND stts_kehadiran = 'Hadir'")->result_array();
		 $jml_tjp_h = count($data_tjp_h);
		 $data_tjp_th = $this->db->query("SELECT * FROM `klasifikasi` WHERE stts_keberadaan ='Tanjungpinang' AND stts_kehadiran = 'Tidak Hadir'")->result_array();
		 $jml_tjp_th = count($data_tjp_th);
		 $kbrt_h = $jml_tjp_h/$hadir;
		 $kbrt_th = $jml_tjp_th/$tdk_hadir;
		 //luar tanjungpinang
		 $data_ltjp_h = $this->db->query("SELECT * FROM `klasifikasi` WHERE stts_keberadaan ='Luar Tanjungpinang' AND stts_kehadiran = 'Hadir'")->result_array();
		 $jml_ltjp_h = count($data_ltjp_h);
		 $data_ltjp_th = $this->db->query("SELECT * FROM `klasifikasi` WHERE stts_keberadaan ='Luar Tanjungpinang' AND stts_kehadiran = 'Tidak Hadir'")->result_array();
		 $jml_ltjp_th = count($data_ltjp_th);
		 $kbrlt_h = $jml_ltjp_h/$hadir;
		 $kbrlt_th = $jml_ltjp_th/$tdk_hadir;

		//kondisi perhitungan
		if ($input1 == 'Laki-laki'){
			  $temp1 = $input1;
			  $h1 = $jkl_h;
			  $th1 = $jkl_th;
		}

		if ($input1 == 'Perempuan'){
		  $temp1 = $input1;
		  $h1 = $jkp_h;
		  $th1 = $jkp_th;
		}
		#===============================
		if ($input2 == 'Pisah'){//PISAH
		  $temp2 = $input2;
		  $h2 = $stpk_p_h;
		  $th2 = $stpk_p_th;
		}

		if ($input2 == 'Belum Menikah'){//BELUM MENIKAH
		  $temp2 = $input2;
		  $h2 = $stpk_bm_h;
		  $th2 = $stpk_bm_th;
		}
		if ($input2 == 'Sudah Menikah'){ //SUDAH MENIKAH
		  $temp2 = $input2;
		  $h2 = $stpk_sm_h;
		  $th2 = $stpk_sm_th;
		}
		#===============================
		if ($input3 == "Kp.transito"){//Alamat
		  $temp3 = $input3;
		  $h3 = $transito1_h;
		  $th3 = $transito1_th;
		}
		if ($input3 == "Kp.ransito"){
		  $temp3 = $input3;
		  $h3 = $transito2_h;
		  $th3 = $transito2_th;
		}
		if ($input3 == "taman transito"){
		  $temp3 = $input3;
		  $h3 = $transito3_h;
		  $th3 = $transito3_th;
		}
		if ($input3 == "Taman.transito"){
		  $temp3 = $input3;
		  $h3 = $transito4_h;
		  $th3 = $transito4_th;
		}
		if ($input3 == "Jl.transito"){
		  $temp3 = $input3;
		  $h3 = $transito5_h;
		  $th3 = $transito5_th;
		}
		if ($input3 == "Komplek.transmigrasi jl.transito"){
		  $temp3 = $input3;
		  $h3 = $transito6_h;
		  $th3 = $transito6_th;
		}

		if ($input3 == "Kp transito"){
		  $temp3 = $input3;
		  $h3 = $transito7_h;
		  $th3 = $transito7_th;
		}
		if ($input3 == "Kp.transito perum.transmigrasi"){
		  $temp3 = $input3;
		  $h3 = $transito8_h;
		  $th3 = $transito8_th;
		}
		if ($input3 == "Jl.transito.kp.transito"){
		  $temp3 = $input3;
		  $h3 = $transito9_h;
		  $th3 = $transito9_th;
		}
		if ($input3 == "Jl.transito perum.transito"){
		  $temp3 = $input3;
		  $h3 = $transito10_h;
		  $th3 = $transito10_th;
		}
		if ($input3 == "Jl.transito kp.transito"){
		  $temp3 = $input3;
		  $h3 = $transito11_h;
		  $th3 = $transito11_th;
		}
		#===============================
		if ($input4 == 'Sudah Rekam'){//KTP K
		  $temp4 = $input4;
		  $h4 = $ktpk_h;
		  $th4 = $ktpk_th;
		}
		if ($input4 == 'Belum Rekam'){//KTP B
		  $temp4 = $input4;
		  $h4 = $ktpb_h;
		  $th4 = $ktpb_th;
		}
		if ($input5 == 'PNS'){//PNS
		  $temp5 = $input5;
		  $h5 = $pkp_h;
		  $th5 = $pkp_th;
		}
		if ($input5 == 'Buruh'){ //Buruh
		  $temp5 = $input5;
		  $h5 = $pkbur_h;
		  $th5 = $pkbur_th;
		}
		if ($input5 == 'BUMN'){ //Buruh
		  $temp5 = $input5;
		  $h5 = $pkbum_h;
		  $th5 = $pkbum_th;
		}
		if ($input5 == 'Mahasiswa'){ //Buruh
		  $temp5 = $input5;
		  $h5 = $pkm_h;
		  $th5 = $pkm_th;
		}
		if ($input5 == 'Pelajar'){ //Buruh
		  $temp5 = $input5;
		  $h5 = $pkpl_h;
		  $th5 = $pkpl_th;
		}
		if ($input5 == 'IRT'){ //Buruh
		  $temp5 = $input5;
		  $h5 = $pkir_h;
		  $th5 = $pkir_th;
		}
		if ($input5 == 'Pensiunan PNS'){ //Buruh
		  $temp5 = $input5;
		  $h5 = $pkppn_h;
		  $th5 = $pkppn_th;
		}
		if ($input5 == 'Swasta'){ //Buruh
		  $temp5 = $input5;
		  $h5 = $pkswst_h;
		  $th5 = $pkswst_th;
		}
		if ($input6 == 'Kurang Dari 200 Meter'){//jarak < 20
		 $temp6 = $input6;
		  $h6 = $jrkk_h;
		  $th6 = $jrkk_th;
		}
		if ($input6 == '200 Meter'){//jarak > 20
		  $temp6 = $input6;
		  $h6 = $jrk_h;
		  $th6 = $jrk_th;
		}
		if ($input6 == 'Lebih dari 200 Meter'){//jarak > 20
		  $temp6 = $input6;
		  $h6 = $jrkl_h;
		  $th6 = $jrkl_th;
		}
		if ($input7 == 'Tanjungpinang'){//keberadaan tanjungpinang
		  $temp7 = $input7;
		  $h7 = $kbrt_h;
		  $th7 = $kbrt_th;
		}
		if ($input7 == 'Luar Tanjungpinang'){ //keberadaan luar tanjungpinang
		   $temp7 = $input7;
		  $h7 = $kbrlt_h;
		  $th7 = $kbrlt_th;
		}
		//perhitungan total kelas hadir dan tidak hadir

		$total_hadir = $h1 * $h2 * $h3 * $h4 * $h5 * $h6 * $h7 * $prob_hadir;
		$total_tdkhadir = $th1 * $th2 * $th3 * $th4 * $th5 * $th6 * $th7 * $prob_tidakhadir;
		$simpulan1 = 'Jadi Probabilitas Kehadiran Pemilihan Gubernur di Kota Tanjungpinang terklasifikasi '.' <b><u>Hadir '.'';
		$simpulan2 = 'Jadi Probabilitas Kehadiran Pemilihan Gubernur di Kota Tanjungpinang terklasifikasi'.' <b><u>Tidak Hadir '.'';
		$judul = 'Hasil Prediksi Kehadiran';
		$data = [
			'judul' => $judul,
			'h1' => round($h1,4),'h2' => round($h2,4),
			'h3' => round($h3,4),'h4' => round($h4,4),
			'h5' => round($h5,4),'h6' => round($h6,4),
			'h7' => round($h7,4),'hadir' => round($total_hadir,7),
			'th1' => round($th1,4),'th2' => round($th2,4),
			'th3' => round($th3,4),'th4' => round($th4,4),
			'th5' => round($th5,4),'th6' => round($th6,4),
			'th7' => round($th7,4),
			'tidak_hadir' => round($total_tdkhadir,7),
			'prob_hadir' => round($prob_hadir,4),
			'prob_tidakhadir' => round($prob_tidakhadir,4),
			'simpulan1' => $simpulan1,'simpulan2' => $simpulan2,
			'input1' => $input1, 'input2' => $input2,
			'input3' => $input3, 'input4' => $input4,
			'input5' => $input5, 'input6' => $input6,
			'input7' => $input7
		];

		if ($total_hadir > $total_tdkhadir) {
			$hadir = 'Hadir';
			$data2 = [
				'kehadiran' => $hadir
			];
			$this->M_Klasifikasi->tambah('hasil_klasifikasi',$data2);
			$this->load->view('template/header',$data);
			$this->load->view('template/sidebar');
			$this->load->view('data/hasil1',$data);
			$this->load->view('template/footer');
		}else{
			$tdkhadir = 'Tidak Hadir';
			$data3 = [
				'kehadiran' => $tdkhadir
			];
			$this->M_Klasifikasi->tambah('hasil_klasifikasi',$data3);
			$this->load->view('template/header', $data);
			$this->load->view('template/sidebar');
			$this->load->view('data/hasil2',$data);
			$this->load->view('template/footer');
		}
	}
	public function hitung(){
		$alamat = 'alamat';
		$pekerjaan = 'pekerjaan';
		$data = [
			'judul' => 'Prediksi Kehadiran Masyarakat', 
			'getAlamat' => $this->M_Klasifikasi->groupBy('klasifikasi',$alamat)->result_array(),
			'getKerja' => $this->M_Klasifikasi->groupBy('klasifikasi',$pekerjaan)->result_array(),
		];
		$this->load->view('template/header', $data);
		$this->load->view('template/sidebar');
		$this->load->view('data/hitung_klasifikasi', $data);
		$this->load->view('template/footer');
	}	
}
