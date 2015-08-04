<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

	public function index()
	{
		$t_var 		= 'Bu bir test değişkenidir.';

		$this->template
			->title('Test')
			->append_js('test.js','','footer2')
			->set(array('variable'=>$t_var,'var2'=>$t_var))
			->set('array',
				array(
					'kamil'=>2110,
					'ahmet'=>22310,
					'mehmet'=>21230,
					'selami'=>1220,
					'mahmut'=>220,
					'ozgur'=>230,
					'yusuf'=>240,
					'ozcan'=>array('kamil1'=>2110,
						'ahmet1'=>22310,
						'mehmet1'=>21230,
						'selami1'=>1220,
						'mahmut1'=>220,
						'ozgur1'=>230,
						'yusuf1'=>240),
				)
			)
			->build('home');
	}
}
