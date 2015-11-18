<?php
class sqlmod extends CI_Model {
    
    function __construct() { // 建構子
        parent::__construct (); // 改寫父親
        {
            $this->load->database (); // 在實體化sqlmod時就立刻執行載入database資料庫設定
        }
    }
    
    function insertdata($array) { // getdata副程式    
        $sql = "INSERT INTO user (user, password) VALUES ('".$array['user']."', '".				$array['password']."')";
		$this->db->query($sql);
    }
    
    function getdata()
    {
    	$sql = "SELECT * FROM user";
	    $query = $this->db->query($sql);
        return $query; // 回傳抓取到的資料庫資料
    }
    
    function deletedata($array){
	    $sql="DELETE FROM user WHERE user='".$array['user']."'";
	    $this->db->query($sql);
    }
}