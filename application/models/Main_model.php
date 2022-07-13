<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Main_model extends CI_Model {

	public function __construct()
	{
		parent::__construct();
		//Do your magic here
	}

	public function do_login()
	{
		$username = $this->input->post('username');
		$password = md5($this->input->post('password'));

		$query = $this->db 	->where('username',$username)
							->where('password', $password)
							->get('login_user'); 

		if($query->num_rows() > 0) {
       		foreach ($query->result() as $sess) {
				$sess_data['status'] = $sess->status;
				$this->session->set_userdata($sess_data);
			}
			$data_session = array(
				'username' => $username,
				'logged_in' => TRUE
			);
			$this->session->set_userdata($data_session);

			return TRUE;
		}else {
			return FALSE;
		}
	}

	public function sign_up(){
		$data = array (
			'name'				=> $this->input->post('name'),
			'username'			=> $this->input->post('username'),
			'password'			=> md5($this->input->post('password')),
			'status'			=> $this->input->post('status'),
		);
		$this->db->insert('login_user', $data);

		if($this->db->affected_rows() > 0){
			return TRUE;
		} else {
			return FALSE;
		}
	}

	public function isUserExist($username) {
 	    $this->db->select('id_user');
    	$this->db->where('username', $username);
    	$query = $this->db->get('login_user');

    	if ($query->num_rows() > 0) {
        	return true;
    	} else {
        	return false;
    	}
	}

	public function get_data_admin()
	{
		return $this->db->order_by('id_user','ASC')
						->get('login_user')
						->result(); 
	}

	public function get_data_ccare()
	{
		return $this->db->order_by('id_ccare','ASC')
						->get('customer_care')
						->result(); 
	}

	public function get_data_event()
	{
		return $this->db->order_by('id_event','ASC')
						->get('event')
						->result(); 
	}

	public function get_data_event_by_idevent($id_event)
	{
		return $this->db->where('id_event', $id_event)
						->get('event')
						->row();
	}

	public function get_data_mkits()
	{
		return $this->db->order_by('id_mkits','ASC')
						->get('marketing_kits')
						->result(); 
	}

	public function get_data_mkits_by_idmkits($id_mkits)
	{
		return $this->db->where('id_mkits', $id_mkits)
						->get('marketing_kits')
						->row();
	}




	public function get_data_sponsorship()
	{
		return $this->db->order_by('id_sponsorship','ASC')
						->get('sponsorship')
						->result(); 
	}

	public function get_data_sponsorship_by_idsponsorship($id_sponsorship)
	{
		return $this->db->where('id_sponsorship', $id_sponsorship)
						->get('sponsorship')
						->row();
	}

	public function delete_admin($id_user){
		$this->db 	->where('id_user', $id_user)
					->delete('login_user');

			if ($this->db->affected_rows() > 0) {
				return TRUE;
			}else {
				return FALSE;
			}
	}

	public function new_customer_care($foto)
	{
		$data = array (
			'id_ccare'	=> NULL,
			'tanggal'	=> $this->input->post('tanggal'),
			'agenda'	=> $this->input->post('agenda'),
			'pic'		=> $foto['file_name'],
			'divisi'	=> $this->input->post('divisi'),
			'jam'		=> $this->input->post('jam'),
			'p_produk'	=> $this->input->post('p_produk'),
			'tempat'	=> $this->input->post('tempat'),
			'nm_tools'	=> $this->input->post('nm_tools'),
		);
		$this->db->insert('customer_care', $data);

		if($this->db->affected_rows() > 0){
			return TRUE;
		} else {
			return FALSE;
		}
	}

	public function new_event(){

		$a = $this->input->post('sponsorship_j');
		$a .= ",";
		$a .= $this->input->post('event_j');
		$jenis = $a;

		$b = $this->input->post('sponsorship_b');
		$b .= ",";
		$b .= $this->input->post('event_b');
		$biaya = $b;

		$c = $this->input->post('tgl_mulai');
		$c .= " s/d ";
		$c .= $this->input->post('tgl_akhir');
		$tgl_pelaksanaan = $c;

		$data = array (
			'id_event'			=> NULL,
			'tgl'				=> $this->input->post('tgl'),
			'no_surat'			=> $this->input->post('no_surat'),
			'perihal'			=> $this->input->post('perihal'),
			'info_detil'		=> $this->input->post('info_detil'),
			'nama_cd'			=> $this->input->post('nama_cd'),
			'catatan'			=> $this->input->post('catatan'),
			'institusi'			=> $this->input->post('institusi'),
			'nama_pic'			=> $this->input->post('nama_pic'),
			'telp_pic'			=> $this->input->post('telp_pic'),
			'no_rek'			=> $this->input->post('no_rek'),
			'bank'				=> $this->input->post('bank'),
			'jenis'				=> $jenis,
			'tgl_pelaksanaan'	=> $tgl_pelaksanaan,
			'biaya'				=> $biaya,
			'lokasi'			=> $this->input->post('lokasi'),
			'jml_audiens'		=> $this->input->post('jml_audiens'),
			'kategori'			=> $this->input->post('kategori'),
			'nama_produk'		=> $this->input->post('nama_produk'),
			'konsep'			=> $this->input->post('konsep'),
			'jenis_mk'			=> $this->input->post('jenis_mk'),
			'jumlah_mk'			=> $this->input->post('jumlah_mk'),
			'tgl_batal'			=> $this->input->post('tgl_batal'),
			'alasan'			=> $this->input->post('alasan'),
			'tgl_dilaksanakan'	=> $this->input->post('tgl_dilaksanakan'),
			'btk_kegiatan'		=> $this->input->post('btk_kegiatan'),
			'jml_dibayar'		=> $this->input->post('jml_dibayar'),
			'doc2finance'		=> $this->input->post('doc2finance'),
			'transfer'			=> $this->input->post('transfer'),
			'status'			=> 'IN PROGRESS',
			'note'				=> NULL,

		);
		$this->db->insert('event', $data);

		if($this->db->affected_rows() > 0){
			return TRUE;
		} else {
			return FALSE;
		}
	}

	public function update_event($id_event)
	{
		$data = array(
			'status'			=> 'DONE',
			'note'				=> $this->input->post('note'),
			);

		$this->db->where('id_event', $id_event)
				->update('event', $data);

		if ($this->db->affected_rows() > 0) {
			return TRUE;
		} else {
			return FALSE;
		}
	}

	public function new_sponsorship(){

		$a = $this->input->post('sponsorship_j');
		$a .= ",";
		$a .= $this->input->post('event_j');
		$jenis = $a;

		$b = $this->input->post('sponsorship_b');
		$b .= ",";
		$b .= $this->input->post('event_b');
		$biaya = $b;

		$c = $this->input->post('tgl_mulai');
		$c .= " s/d ";
		$c .= $this->input->post('tgl_akhir');
		$tgl_pelaksanaan = $c;

		$data = array (
			'id_sponsorship'	=> NULL,
			'tgl'				=> $this->input->post('tgl'),
			'no_surat'			=> $this->input->post('no_surat'),
			'perihal'			=> $this->input->post('perihal'),
			'info_detil'		=> $this->input->post('info_detil'),
			'nama_cd'			=> $this->input->post('nama_cd'),
			'catatan'			=> $this->input->post('catatan'),
			'institusi'			=> $this->input->post('institusi'),
			'nama_pic'			=> $this->input->post('nama_pic'),
			'telp_pic'			=> $this->input->post('telp_pic'),
			'no_rek'			=> $this->input->post('no_rek'),
			'bank'				=> $this->input->post('bank'),
			'jenis'				=> $jenis,
			'tgl_pelaksanaan'	=> $tgl_pelaksanaan,
			'biaya'				=> $biaya,
			'lokasi'			=> $this->input->post('lokasi'),
			'jml_audiens'		=> $this->input->post('jml_audiens'),
			'kategori'			=> $this->input->post('kategori'),
			'nama_produk'		=> $this->input->post('nama_produk'),
			'konsep'			=> $this->input->post('konsep'),
			'jenis_mk'			=> $this->input->post('jenis_mk'),
			'jumlah_mk'			=> $this->input->post('jumlah_mk'),
			'tgl_batal'			=> $this->input->post('tgl_batal'),
			'alasan'			=> $this->input->post('alasan'),
			'tgl_dilaksanakan'	=> $this->input->post('tgl_dilaksanakan'),
			'btk_kegiatan'		=> $this->input->post('btk_kegiatan'),
			'jml_dibayar'		=> $this->input->post('jml_dibayar'),
			'doc2finance'		=> $this->input->post('doc2finance'),
			'transfer'			=> $this->input->post('transfer'),
			'status'			=> 'IN PROGRESS',
			'note'				=> NULL,

		);
		$this->db->insert('sponsorship', $data);

		if($this->db->affected_rows() > 0){
			return TRUE;
		} else {
			return FALSE;
		}
	}

	public function update_sponsorship($id_sponsorship)
	{
		$data = array(
			'status'			=> 'DONE',
			'note'				=> $this->input->post('note'),
			);

		$this->db->where('id_sponsorship', $id_sponsorship)
				->update('sponsorship', $data);

		if ($this->db->affected_rows() > 0) {
			return TRUE;
		} else {
			return FALSE;
		}
	}

	public function new_marketing_kits(){

		$a = $this->input->post('tgl_mulai');
		$a .= " s/d ";
		$a .= $this->input->post('tgl_akhir');
		$timeline = $a;

		$b = $this->input->post('desain').',';
		$b .= $this->input->post('cetak');
		$b .= $this->input->post('souvenir');
		$b .= $this->input->post('prg_marketing');
		$b .= $this->input->post('exhibition');
		$b .= $this->input->post('input_data');
		$kebutuhan = $b;

		$data = array (
			'id_mkits'			=> NULL,
			'nama'			=> $this->input->post('nama'),
			'nik'			=> $this->input->post('nik'),
			'nm_program'	=> $this->input->post('nm_program'),
			'tgl'			=> $this->input->post('tgl'),
			'kebutuhan'		=> $kebutuhan,
			'deskripsi'		=> $this->input->post('deskripsi'),
			'jumlah'		=> $this->input->post('jumlah'),
			'timeline'		=> $timeline,
			'status'		=> 'IN PROGRESS',
			'note'			=> NULL,

		);
		$this->db->insert('marketing_kits', $data);

		if($this->db->affected_rows() > 0){
			return TRUE;
		} else {
			return FALSE;
		}
	}

	public function update_mkits($id_mkits)
	{
		$data = array(
			'status'			=> 'DONE',
			'note'				=> $this->input->post('note'),
			);

		$this->db->where('id_mkits', $id_mkits)
				->update('marketing_kits', $data);

		if ($this->db->affected_rows() > 0) {
			return TRUE;
		} else {
			return FALSE;
		}
	}

}

/* End of file Main_model.php */
/* Location: ./application/models/Main_model.php */