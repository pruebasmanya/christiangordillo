<?php  

/**
* 
*/
class Admin_ci extends CI_Model
{
	
	public function ver()
	{
		$query = $this->db->get('clientes');
	    return $query->result_array();

	}

	function get_total_empleados(){
	   return $this->db->count_all('clientes');
	}


	public function edit_select($id){
		$query = $this->db->get_where('clientes', array('id' => $id));
		return $query->row_array();
	}

	public function agregar_user(){
		$this->db->insert('clientes', array('nombre'   => $this->input->post('nombre'),
											'apellido'   => $this->input->post('apellido'),
											'area'   => $this->input->post('rol'),
											'estado'   => $this->input->post('estado'),
											)
						  );
	}
	// editar user
	public function editar($id)
	{
		$this->db->update('clientes', array('nombre'   => $this->input->post('nombre'),
										'apellido'   => $this->input->post('apellido'),
										'area'   => $this->input->post('rol'),
										'estado'   => $this->input->post('estado')),
										array('id' => $id));
	}


	public function buscar($name){

		$query = $this->db->get_where('clientes', array('nombre' => $name));
		return $query->result_array();

		$tes = $this->db->get_where('clientes', array('apellido' => $name));
		return $tes->result_array();

	}

	
	// Eliminar User
	public function eliminar($id)
	{
		$this->db->delete('clientes', array('id'=> $id));
	}

	// Odernar user
	public function ordenar()
	{
		# code...
	}
}

?>