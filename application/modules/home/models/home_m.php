<?php
    class home_m extends  CI_Model{
        public function __construct(){
            parent::__construct();
        }

        public function get_data(){

            $query = $this->db
                ->select('*')
                ->from('agency_groups')
                ->get();

            return $query->result_array();
        }

    }