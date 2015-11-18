<?php
class getsqlmod extends CI_Model {
    function __construct() { // 建構值
        parent::__construct (); // 改寫父親
        {
            $this->load->database (); // 載入database資料庫設定
        }
    }
    function getdata() { // getdata副程式    
        $query = $this->db->query('select * from user'); // 抓取資料庫指令
        return $query; // 回傳抓取到的資料庫資料
    }
}