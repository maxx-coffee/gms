<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Presentation extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -  
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in 
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see http://codeigniter.com/user_guide/general/urls.html
	 */
	public function index()
	{
		$this->load->helper('url');
		$this->load->model('presentations');
		$data['query'] = $this->presentations->view_all();
		$this->load->view('index', $data);
	}
	
	public function new_presentation()
	{
	$this->load->helper('url'); 
		$this->load->helper('form');
		
		$this->load->view('new');

	}
	
	public function edit()
	{
		$this->load->helper('form');
		$this->load->model('presentations');
		$data['entry_id'] = $this->uri->segment(3, 0);
		$data['query'] = $this->presentations->get_entry($this->uri->segment(3, 0));
		$this->load->view('edit', $data);
	}
	
	public function edit_entry(){
	$this->load->helper('url'); 
		$this->load->model('presentations');
		$this->presentations->edit($_POST['entry_id']);
		redirect('/' );
	}
	
	public function submit_entry(){
	$this->load->helper('url'); 
	$this->load->model('presentations');
	$this->presentations->insert_entry();
	redirect('/' );
	}
	
	public function view(){
	$this->load->model('presentations');
	$entry_id = $this->uri->segment(3, 0);
	$data['query'] = $this->presentations->get_entry($entry_id);
	$this->load->view('view', $data);
	
	}
	
	public function delete(){
	$this->load->helper('url'); 
	$this->load->model('presentations');
	$entry_id = $this->uri->segment(3, 0);
	$this->presentations->delete($entry_id);
	redirect('/' );
	
	}
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */