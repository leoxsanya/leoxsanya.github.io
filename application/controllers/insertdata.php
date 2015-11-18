<?php
if (! defined ( 'BASEPATH' ))
    exit ( 'No direct script access allowed' );

class insertdata extends CI_Controller {
    
    public function index() {
        $this->load->view('insertsql');	//在瀏覽器呼叫insertdata時，執行載入insertsql頁面
    }
    
    public function insert()
    {
    if($this->input->post('user')){	//如果user不為空值，則執行query
	    if($this->input->post('submit')=="新增帳號")	//如果點擊的是新增帳號，則執行
    	{
	    	$data = array ( // $data陣列
                'user' => $this->input->post ( 'user' ), //用post抓取資料並丟入陣列
                'password' => $this->input->post ( 'password' ), 
				);
			$this->load->model ( 'sqlmod' ); // 載入model
			$this->sqlmod->insertdata($data);//執行model中的insertdata()函數
			$query = $this->sqlmod->getdata ()->result_array (); // 使用sqlmod裡的getdata含數並將回傳值轉為陣列
			$data2 = array ( // 存入列陣
                		'data' => $query
			);
			$this->load->view ( 'insertsqlOK', $data2 );
				
    	}
    	else
    	{
    		$data = array ( // $data陣列
                'user' => $this->input->post ( 'user' ), // 用post抓取資料並丟入陣列
                'password' => $this->input->post ( 'password' ), 
				);
    		$this->load->model ( 'sqlmod' ); // 載入model
    		$this->sqlmod->deletedata($data);
			$query = $this->sqlmod->getdata ()->result_array (); // 使用sqlmod裡的getdata功能
			$data2 = array ( // 存入列陣
                		'data' => $query
			);
			$this->load->view ( 'insertsqlOK', $data2 );
    	}

    }
    else
    {
	    echo "沒有輸入任何資料，請輸入帳號！";
    }
    	
    }
}