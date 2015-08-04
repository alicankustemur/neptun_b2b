<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends Front_Controller {

	public function __construct(){
		parent::__construct();
	}

	public function index()
	{
		$this->load->model('home_m');

		$t_var 		= 'Bu bir test değişkenidir.';

		$this->template
			->title('Test')
			->set(array('variable'=>$t_var,'var2'=>$t_var))
			->set('array',$this->home_m->get_data())
			->build('home');
	}
}
