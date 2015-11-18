<?php
if (! defined ( 'BASEPATH' ))
    exit ( 'No direct script access allowed' );
class index_t extends CI_Controller {
    
    public function index() {
        $pagedata = array (
                       "title" => "ネーネー的汽車材料行",
					   "name" => "林政宏"
					   );
		$button = array(
                	"data"=>array(	
                		"首頁" => "index_test/home",
						"與我聯絡" => "index_test/contact",
						"技術支援" => "index_test/services",
						"網站導覽" => "index_test/map",
						)
				);
 
        $this->load->view ( 'index_test1', $pagedata );
        $this->load->view ( 'index_test2', $button );
    }
 
}