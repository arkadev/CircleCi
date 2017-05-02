<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class unit_test_js extends CI_Controller {
        public function __construct(){
            parent::__construct();
            $this->load->helper(array('form', 'url'));		
        }
		
		public function index(){
			$this->load->view('unit_test/unit_test_js');
		}		
}