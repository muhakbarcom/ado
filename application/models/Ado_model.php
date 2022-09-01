<?php 
class Ado_model extends CI_model {
	public function get_data($table){
		return $this->db->get($table);
	}
	public function tampil_ado()
	{
		return $this->db->get('ado');
	}
	public function get_where($where, $table){
		return $this->db->get_where($table, $where);
	}
	public function insert_data($data,$table){
		$this->db->insert($table,$data);

	}
	public function update_data($table,$data,$where){
		$this->db->update($table,$data,$where);

	}
  public function get_by_id($id)
  {
    $this->db->where('jenis_ado',$id);
    return $this->db->get('ado')->row();
  }
  function grafik(){
       $this->db->select('ado.jenis_ado, count(ado.estimasi) as total');
       $this->db->from('ado');
       $this->db->group_by('jenis_ado');
       //$this->db->limit(5);
       //$this->db->where('status','Diterima');
       $query = $this->db->get();
       return $query->result();
    }
	public function hitungJumlahBank()
{   
    $query = $this->db->where('jenis_ado','Bank')->get('ado');
    if($query->num_rows()>0)
    {
      return $query->num_rows();
    }
    else
    {
      return 0;
    }
}
public function hitungJumlahKecamatan()
{   
    $query = $this->db->where('jenis_ado','Kecamatan')->get('ado');
    if($query->num_rows()>0)
    {
      return $query->num_rows();
    }
    else
    {
      return 0;
    }
}
	public function hitungJumlahAdo()
{   
    $query = $this->db->get('ado');
    if($query->num_rows()>0)
    {
      return $query->num_rows();
    }
    else
    {
      return 0;
    }
}
public function hitungJumlahPasar()
{   
    $query = $this->db->where('jenis_ado','Pasar')->get('ado');
    if($query->num_rows()>0)
    {
      return $query->num_rows();
    }
    else
    {
      return 0;
    }
}
public function hitungJumlahSklh()
{   
    $query = $this->db->where('jenis_ado','Sekolah/Universitas')->get('ado');
    if($query->num_rows()>0)
    {
      return $query->num_rows();
    }
    else
    {
      return 0;
    }
}
public function hitungJumlahPerusahaan()
{   
    $query = $this->db->where('jenis_ado','Perusahaan')->get('ado');
    if($query->num_rows()>0)
    {
      return $query->num_rows();
    }
    else
    {
      return 0;
    }
}
	public function hitungJumlahAsuransi()
{   
    $query = $this->db->where('jenis_ado','Asuransi')->get('ado');
    if($query->num_rows()>0)
    {
      return $query->num_rows();
    }
    else
    {
      return 0;
    }
}
public function hitungJumlahNonBank()
{   
    $query = $this->db->where('jenis_ado','Non-Bank')->get('ado');
    if($query->num_rows()>0)
    {
      return $query->num_rows();
    }
    else
    {
      return 0;
    }
}
public function ambil_detail_lap($id)
	{
		$hasil = $this->db->where('id_ado',$id)->get('ado');
		if($hasil->num_rows() > 0){
			return $hasil->result();
		} else{
			return false;
		}
	}
	public function cek_login()
	{
		$username = set_value('username');
		$password = set_value('password');

		$result = $this->db
						->where('username',$username)
						->where('password',md5($password))
						->limit(1)
						->get('user');
		if($result->num_rows() > 0){
			return $result->row();
		}else{
			return FALSE;
		}
	}
	public function delete_data($where,$table){
		$this->db->where($where);
		$this->db->delete($table);

	}
	public function update_password($where,$data,$table)
	{
		$this->db->where($where);
		$this->db->update($table,$data);
	}
	public function downloadPembayaran($id)
	{
		$query= $this->db->get_where('transaksi', array('id_rental'=>$id));
		return $query->row_array();
	}
}

 ?>