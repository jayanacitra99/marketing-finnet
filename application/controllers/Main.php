<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Main extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('Main_model');
		//Do your magic here
	}

	public function index()
	{
		$this->load->view('welcome_view');
	}

	public function do_login()
	{
		if($this->input->post('submit')){

			$this->form_validation->set_rules('username', 'Username', 'trim|required');
			$this->form_validation->set_rules('password', 'Password', 'trim|required');

			if ($this->form_validation->run() == TRUE) {

				if($this->Main_model->do_login()){

					if ($this->session->userdata('status')=='admin') {
						redirect('main/admin');
					}
					elseif ($this->session->userdata('status')=='customer_care') {
						redirect('main/add_customer_care');
					}
					elseif ($this->session->userdata('status')=='event') {
						redirect('main/add_event');
					}
					elseif ($this->session->userdata('status')=='sponsorship') {
							redirect('main/add_sponsorship');
					}
					elseif ($this->session->userdata('status')=='marketing_kits') {
						redirect('main/add_marketing_kits');
					}

				}else {

					$data['notif'] = 'Gagal Login !!';
					$this->load->view('welcome_view');

				}
			} else {

				$data['notif'] = validation_errors();
				$this->load->view('welcome_view');

			}
		}else {

			$this->load->view('welcome_view');

		}
	}

	public function isUserExist($username) {
	    $is_exist = $this->Main_model->isUserExist($username);

	    if ($is_exist) {
	        $this->form_validation->set_message(
	            'isUserExist', 'Username is already exist.'
	        );    
	        return false;
	    } else {
	        return true;
	    }
	}

	public function logout()
	{
		$data = array(
			'username' 	=> '',
			'logged_in' => FALSE,
			'status'	=> ''
		);

		$this->session->sess_destroy();

		redirect(base_url('index.php/main'));
	}




	public function add_admin()
	{
		if($this->session->userdata('logged_in')==TRUE)
		{
				$data['main_view'] = 'add_admin_view';
				$this->load->view('template_admin',$data);
		} else {
			redirect('main','refresh');
		}
	}

	public function admin()
	{
		if($this->session->userdata('logged_in')==TRUE)
		{
			$data['main_view'] = 'view_admin_view';
			$data['admin'] = $this->Main_model->get_data_admin();
			$this->load->view('template_admin',$data);
		} else {
			redirect('main','refresh');
		}
	}

	public function sign_up(){
		if($this->session->userdata('logged_in')==TRUE)
		{
			if($this->input->post('submit')){

				$this->form_validation->set_rules('username', 'Username', 'trim|required|callback_isUserExist');
				$this->form_validation->set_rules('name', 'Name', 'trim|required');
				$this->form_validation->set_rules('password', 'Password', 'trim|required');

				if ($this->form_validation->run() == TRUE) {
					if($this->Main_model->sign_up() == TRUE){
						redirect('main/admin');
					} else {
						$data['notif'] = 'Sign Up Failed!!';
						$this->load->view('add_admin_view',$data);
					}
				} else {
					$data['main_view'] = 'add_admin_view';
					$data['notif'] = validation_errors();
					$this->load->view('template_admin',$data);
				}
			} else {
				$data['main_view'] = 'add_admin_view';
				$this->load->view('template_admin',$data);
			}
		} else {
			redirect('main','refresh');
		}
	}

	public function delete_admin(){
		if($this->session->userdata('logged_in') == TRUE) {
			$id_user = $this->uri->segment(3);

			if($this->Main_model->delete_admin($id_user) == TRUE) {
				$this->session->set_flashdata('notif','Hapus Sukses');
				redirect(base_url('index.php/main/admin'));
			}else {
				$this->session->set_flashdata('notif','Hapus Gagal !!');
				redirect(base_url('index.php/main/admin'));
			}
		}else {
			redirect('admin');
		}
	}




	public function add_sponsorship()
	{
		if($this->session->userdata('logged_in')==TRUE)
		{
				$data['main_view'] = 'add_sponsorship_view';
				$this->load->view('template_sponsorship',$data);
		} else {
			redirect('main','refresh');
		}
	}

	public function sponsorship()
	{
		if($this->session->userdata('logged_in')==TRUE)
		{
				$data['sponsorship'] = $this->Main_model->get_data_sponsorship();
				$data['main_view'] = 'view_sponsorship_view';
				$this->load->view('template_sponsorship',$data);
		} else {
			redirect('main','refresh');
		}
	}

	public function new_sponsorship()
	{
		if($this->session->userdata('logged_in')==TRUE)
		{
				if($this->input->post('submit')){
					if($this->Main_model->new_sponsorship() == TRUE){
						redirect('main/sponsorship');
					} else {
						$data['notif'] = 'Add New Sponsorship Failed!!';
						$data['main_view'] = 'add_sponsorship_view';
						$this->load->view('template_sponsorship',$data);
					}
				} else {
					$this->load->view('add_sponsorship_view');
				}
		} else {
			redirect('main','refresh');
		}
	}

	public function edit_sponsorship()
	{
		if ($this->session->userdata('logged_in') == TRUE) {
			$id_sponsorship = $this->uri->segment(3);
			$data['main_view'] = 'done_sponsorship_view';
			$data['done_sponsorship'] = $this->Main_model->get_data_sponsorship_by_idsponsorship($id_sponsorship);

			$this->load->view('template_sponsorship', $data);
		} else {
			redirect('main/sponsorship','refresh');
		}
	}

	public function do_done_sponsorship()
	{
		if ($this->session->userdata('logged_in') == TRUE) {

			$id_sponsorship = $this->uri->segment(3);

			if ($this->input->post('submit')) {

					if ($this->Main_model->update_sponsorship($id_sponsorship) == TRUE) {
						
						redirect(base_url('index.php/main/sponsorship'));
					} else {
						$data['notif'] = 'Done Failed!';
						$data['main_view'] = 'view_sponsorship_view';
						$this->load->view('template_sponsorship', $data);
					}
			}
		} else {
			redirect('main/sponsorship','refresh');
		}
	}




	public function add_marketing_kits()
	{
		if($this->session->userdata('logged_in')==TRUE)
		{	
				$data['main_view'] = 'add_mkits_view';
				$this->load->view('template_mkits',$data);
		} else {
			redirect('main','refresh');
		}
	}

	public function marketing_kits()
	{
		if($this->session->userdata('logged_in')==TRUE)
		{
				$data['marketing_kits'] = $this->Main_model->get_data_mkits();
				$data['main_view'] = 'view_mkits_view';
				$this->load->view('template_mkits',$data);
		} else {
			redirect('main','refresh');
		}
	}

	public function new_marketing_kits()
	{
		if($this->session->userdata('logged_in')==TRUE)
		{
				if($this->input->post('submit')){
					if($this->Main_model->new_marketing_kits() == TRUE){
						redirect('main/marketing_kits');
					} else {
						$data['notif'] = 'Add New Marketing Kits Failed!!';
						$data['main_view'] = 'add_mkits_view';
						$this->load->view('template_mkits',$data);
					}
				} else {
					$this->load->view('add_mkits_view');
				}
		} else {
			redirect('main','refresh');
		}
	}

	public function edit_marketing_kits()
	{
		if ($this->session->userdata('logged_in') == TRUE) {
			$id_mkits = $this->uri->segment(3);
			$data['main_view'] = 'done_mkits_view';
			$data['done_mkits'] = $this->Main_model->get_data_mkits_by_idmkits($id_mkits);

			$this->load->view('template_mkits', $data);
		} else {
			redirect('main/mkits','refresh');
		}
	}

	public function do_done_marketing_kits()
	{
		if ($this->session->userdata('logged_in') == TRUE) {

			$id_mkits = $this->uri->segment(3);

			if ($this->input->post('submit')) {

					if ($this->Main_model->update_mkits($id_mkits) == TRUE) {
						
						redirect(base_url('index.php/main/marketing_kits'));
					} else {
						$data['notif'] = 'Done Failed!';
						$data['main_view'] = 'view_mkits_view';
						$this->load->view('template_mkits', $data);
					}
			}
		} else {
			redirect('main/marketing_kits','refresh');
		}
	}



	public function add_event()
	{
		if($this->session->userdata('logged_in')==TRUE)
		{
				$data['main_view'] = 'add_event_view';
				$this->load->view('template_event',$data);
		} else {
			redirect('main','refresh');
		}
	}

	public function event()
	{
		if($this->session->userdata('logged_in')==TRUE)
		{
				$data['main_view'] = 'view_event_view';
				$data['event'] = $this->Main_model->get_data_event();
				$this->load->view('template_event',$data);
		} else {
			redirect('main','refresh');
		}
	}

	public function new_event()
	{
		if($this->session->userdata('logged_in')==TRUE)
		{
				if($this->input->post('submit')){
					if($this->Main_model->new_event() == TRUE){
						redirect('main/event');
					} else {
						$data['notif'] = 'Add New Event Failed!!';
						$data['main_view'] = 'add_event_view';
						$this->load->view('template_event',$data);
					}
				} else {
					$this->load->view('add_event_view');
				}
		} else {
			redirect('main','refresh');
		}
	}

	public function edit_event()
	{
		if ($this->session->userdata('logged_in') == TRUE) {
			$id_event = $this->uri->segment(3);
			$data['main_view'] = 'done_event_view';
			$data['done_event'] = $this->Main_model->get_data_event_by_idevent($id_event);

			$this->load->view('template_event', $data);
		} else {
			redirect('main/event','refresh');
		}
	}

	public function do_done_event()
	{
		if ($this->session->userdata('logged_in') == TRUE) {

			$id_event = $this->uri->segment(3);

			if ($this->input->post('submit')) {

					if ($this->Main_model->update_event($id_event) == TRUE) {
						
						redirect(base_url('index.php/main/event'));
					} else {
						$data['notif'] = 'Done Failed!';
						$data['main_view'] = 'view_event_view';
						$this->load->view('template_event', $data);
					}
			}
		} else {
			redirect('main/sponsorship','refresh');
		}
	}




	public function add_customer_care()
	{
		if($this->session->userdata('logged_in')==TRUE)
		{
				$data['main_view'] = 'add_ccare_view';
				$this->load->view('template_ccare',$data);
		} else {
			redirect('main','refresh');
		}
	}

	public function customer_care()
	{
		if($this->session->userdata('logged_in')==TRUE)
		{
			$data['main_view'] = 'view_ccare_view';
			$data['ccare'] = $this->Main_model->get_data_ccare();
			$this->load->view('template_ccare',$data);
		} else {
			redirect('main','refresh');
		}
	}

	public function new_customer_care()
	{
		if($this->session->userdata('logged_in')==TRUE)
		{
				if($this->input->post('submit')){

					$config['upload_path'] = './uploads/';
					$config['allowed_types'] = 'gif|jpg|png';
					$config['max_size']  = '2000';

					$this->load->library('upload', $config);
					
					if ($this->upload->do_upload('foto')){
					

						if ($this->Main_model->new_customer_care($this->upload->data()) == TRUE) {
							
							redirect(base_url('index.php/main/customer_care'));
						} else {
							
							$data['notif'] = 'Add Failed!!';
							$data['main_view'] = 'add_ccare_view';
							$this->load->view('template_ccare', $data);
						}
					} else {
						$data['main_view'] = 'add_ccare_view';
						$data['notif'] = $this->upload->display_errors();
						$this->load->view('template_ccare', $data);
					}
				} else {
					$this->load->view('add_sponsorship_view');
				}
		} else {
			redirect('main','refresh');
		}
	}

}

/* End of file Main.php */
/* Location: ./application/controllers/Main.php */