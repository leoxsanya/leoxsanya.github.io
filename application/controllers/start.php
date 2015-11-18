<?php
if (! defined ( 'BASEPATH' ))
    exit ( 'No direct script access allowed' );
class start extends CI_Controller {
    
    public function index() {
        $date = array (
                "name" => "林政宏"
        );
        $this->load->view ( 'start_view', $date );
    }
    public function link() {
        $this->load->view ( 'ccc.html' );
    }
    public function fly() {
        echo "飛行測試";
    }
 
}