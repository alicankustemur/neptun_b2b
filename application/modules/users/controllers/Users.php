<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Users extends Front_controller {

    public function __construct(){
        parent::__construct();
    }

    public function index()
    {

        $this->template
            ->title('Giriş Yap')
            ->build('login');
    }
}
