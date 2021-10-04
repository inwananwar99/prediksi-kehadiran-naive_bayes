<?php 

class M_Klasifikasi extends CI_Model{
	
	public function index($tabel)
	{
		return $this->db->get($tabel);
	}
   public function indexes(){
   return $this->db->get('klasifikasi')->result();
  }

  public function insert($data){
    $insert = $this->db->insert_batch('klasifikasi', $data);
    if($insert){
      return true;
    }
  }

	public function tambah($tabel,$data){
		return $this->db->insert($tabel,$data);
	}
	
  public function getData($table,$where){
    return $this->db->get_where($table,$where);
    
  }

  public function ubahData($where, $data, $table){
    $this->db->where($where);
    $this->db->update($table, $data);
  }

  public function hapusData($where,$table){
    $this->db->where($where);
    $this->db->delete($table);
  }

   public function training($tabel,$limit){
    return $this->db->query("SELECT * FROM $tabel LIMIT $limit");
   }

   public function testing($tabel,$limit,$offset){
    return $this->db->query("SELECT * FROM $tabel LIMIT $limit,$offset");
   }

    public function groupBy($tabel,$group){
    return $this->db->query("SELECT * FROM $tabel GROUP BY $group");
   }

   public function getKehadiran($tabel, $par1, $val1, $par2, $val2, $par3, $val3, $par4, $val4){
    return $this->db->query("SELECT * FROM $tabel WHERE $par1 = '$val1' AND $par2 > $val2 AND $par3 < $val3 AND $par4 = '$val4'");
   }

} 


 ?>