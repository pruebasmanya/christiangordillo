<?php  

/**
* 
*/
class Home extends CI_Controller
{
	

	private $limite = 7;
	public function __construct()
	{

		parent::__construct();
		$this->load->model('admin_ci');

		
	}

	public function index(){
	    $data['items'] = $this->admin_ci->ver();

		$this->load->view('admin/header');
		$this->load->view('admin/home', $data);
		$this->load->view('admin/footer');
	}

	public function register_emp(){
		if ($this->input->post('nombre')=="") {
			$this->load->view('admin/header');
			$this->load->view('admin/register');
			$this->load->view('admin/footer');
		}else{
			$this->admin_ci->agregar_user();
			redirect('/');
		}

		
	}
	public function export(){
		$this->load->view('admin/export');
	}

	public function update_emp($id){
		if ($this->input->post('nombre')=="") {
			$data['items'] = $this->admin_ci->edit_select($id);
			$this->load->view('admin/header');
			$this->load->view('admin/edit', $data);
			$this->load->view('admin/footer');
		}else{
			$this->admin_ci->editar($id);
			redirect('/');
		}
	}
	public function delete_emp($id){
		$this->admin_ci->eliminar($id);
		redirect('/');
	}


}
?>