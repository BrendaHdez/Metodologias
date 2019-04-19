<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Clientes extends CI_Controller {

	function __construct()
	{

		parent::__construct();
		$this->load->model('Clientes_model');
		$this->load->model('Sucursales_model');
		$this->load->model('Productos_model');

	}
	public function index()
	{
		if($this->session->userdata('activo')==1)
		{
			$DATA_CLIENTES=$this->Clientes_model->get_clientes(); //usuarios_model
			$data=array(
				'DATA_CLIENTES'=>$DATA_CLIENTES,
				'PRUEBA'=>1,
			);

			$this->load->view('headers/scripts');
			$this->load->view('headers/panelnavbar');
			$this->load->view('clientes/clientes',$data);
		}
		else
		{
			redirect('login');
		}
	}
	public function agregar_cliente()
	{
		$this->load->view('headers/panelnavbar');
		$this->load->view('headers/scripts');
		$this->load->view('clientes/agregar');
	}
	public function crear_cliente()
	{
		$nombre= $this->input->post('nombre',TRUE);
		$apellidos= $this->input->post('apellidos',TRUE);
		$telefono= $this->input->post('telefono',TRUE);
		$correo=$this->input->post('correo',TRUE);
		
		$data=array(
				'nombre'=> $nombre,
				'apellidos'=> $apellidos,
				'telefono' => $telefono,
				'correo'=> $correo,
		);
		$this->Clientes_model->set_clientes($data);
		redirect('clientes');
	}
	public function eliminar_cliente()
	{
		echo 'HolaMundo';
		$id_cliente=$this->uri->segment(3);
		$this->Clientes_model->delete_cliente($id_cliente);
		redirect('clientes');
	}

	public function modificar()
	{
		$id_cliente = $this->uri->segment(3);
		$DATA_CLIENTES = $this->Clientes_model->get_cliente_modificar($id_cliente);
		$data=array(
			'DATA_CLIENTES'=>$DATA_CLIENTES,
			'id_cliente' =>$id_cliente,
		);

		$this->load->view('headers/panelnavbar');
		$this->load->view('headers/scripts');
		$this->load->view('clientes/modificar',$data);
	}
	public function actualizar_info()
	{
		$id_cliente=$this->uri->segment(3);
		$nombre=$this->input->post('nombre',TRUE);
		$apellidos=$this->input->post('apellidos',TRUE);
		$telefono=$this->input->post('telefono',TRUE);
		$correo=$this->input->post('correo',TRUE);
		$data=array(
				
				'nombre'=> $nombre,
				'apellidos'=> $apellidos,
				'telefono'=> $telefono,
				'correo'=> $correo,
		);
		$this->Clientes_model->update_cliente($id_cliente,$data);
		//echo "<script>alert('Datos Modificados Correctamente');window.location.href='".base_url()."index.php/clientes'</script>";
	}
	public function vista_datos(){
		
		$DATA_CLIENTES = FALSE;
		$DATA_SUCURSALES=$this->Sucursales_model->get_sucursales(); //usuarios_model
		$id_cliente=FALSE;
		$data=array(
			'DATA_CLIENTES'=>$DATA_CLIENTES,
			'DATA_SUCURSALES'=>$DATA_SUCURSALES,
			'id_cliente' =>$id_cliente,
		);
		$this->load->view('headers/scripts');
		$this->load->view('headers/navbar');
		$this->load->view('clientes/datos_cliente',$data);
		$this->load->view('headers/footer');
	}
	public function verificar_cliente(){
		$DATA_SUCURSALES=$this->Sucursales_model->get_sucursales(); //usuarios_model
		$correo = $this->input->post('verifica_email',TRUE);
		$telefono=$this->input->post('verifica_telefono',TRUE);
		$DATA_CLIENTES = $this->Clientes_model->get_cliente_buscar($correo,$telefono);
		if($DATA_CLIENTES!=FALSE){
			$data=array(
			'DATA_CLIENTES'=>$DATA_CLIENTES,
			'DATA_SUCURSALES'=>$DATA_SUCURSALES,
			);

			$this->load->view('headers/scripts');
			$this->load->view('headers/navbar');
			$this->load->view('clientes/datos_cliente',$data);
		}
		else{
			$DATA_CLIENTES = FALSE;
			$id_cliente=FALSE;
			$data=array(
				'DATA_CLIENTES'=>$DATA_CLIENTES,
				'id_cliente' =>$id_cliente,
				'DATA_SUCURSALES'=>$DATA_SUCURSALES,
			);
			echo "<script>alert('Losentimos no se encontro en la base de datos favor de llenar los registros');</script>";
			$this->load->view('headers/scripts');
			$this->load->view('headers/navbar');
			$this->load->view('clientes/datos_cliente',$data);
		}
		
	}
	public function registrar_pedido(){
		$correo = $this->input->post('telefono',TRUE);
		$telefono=$this->input->post('correo',TRUE);
		$DATA_CLIENTES = $this->Clientes_model->get_cliente_buscar($correo,$telefono);
		if($DATA_CLIENTES!=FALSE){
			$nombre= $this->input->post('nombre',TRUE);
			$apellidos= $this->input->post('apellidos',TRUE);
			$telefono= $this->input->post('telefono',TRUE);
			$correo=$this->input->post('correo',TRUE);
			
			$data=array(
					'nombre'=> $nombre,
					'apellidos'=> $apellidos,
					'telefono' => $telefono,
					'correo'=> $correo,
			);
			$this->Clientes_model->set_clientes($data);
		}
			$nombre= $this->input->post('nombre',TRUE);
			$apellidos= $this->input->post('apellidos',TRUE);
			$telefono= $this->input->post('telefono',TRUE);
			$correo=$this->input->post('correo',TRUE);	
		//-----------------------------------------
		$DATA_CLIENTES = $this->Clientes_model->get_cliente_buscar($correo,$telefono);
		if($DATA_CLIENTES!=FALSE){
			$data=array(
			'DATA_CLIENTES'=>$DATA_CLIENTES,
			);
			foreach ($DATA_CLIENTES->result() as $row) 
			{
				$id_cliente=$row->id_cliente;
			}
		}
		$DATA_PRODUCTOS=$this->Productos_model->get_orden();
			$data=array(
				'DATA_PRODUCTOS'=>$DATA_PRODUCTOS,
				'PRUEBA'=>1,
			);
		if($DATA_PRODUCTOS!=FALSE){
			foreach ($DATA_PRODUCTOS->result() as $row) 
			{
				
				$id_sucursal= $this->input->post('sucursal',TRUE);
				//idcliente
				$id_producto=$row->id_producto;
				$cantidad=$row->cantidad;
				$total=$row->total;
				$fecha=$this->input->post('fecha',TRUE);
				
				$data=array(
						'id_sucursal'=> $id_sucursal,
						'id_cliente'=> $id_cliente,
						'id_producto' => $id_producto,
						'cantidad'=>$cantidad,
						'total'=>$total,
						'fecha'=> $fecha,
				);
				$this->Productos_model->set_pedido($data);
				echo "<script>alert('Pedido Agregado Correctamente')</script>";
			}
		}		

		redirect('principal');
	}
}
?>