<?php

include_once 'DBConnection.php';

class Users extends DBConnection {
    
    
    public function _construct() {
        parent::DBConnection;
    }
    
    public function signup($first_name, $last_name, $email, $gender, $address, $post_code, $password) {
        $sql = "insert into users values(NULL, '".$first_name."', '".$last_name."', '"
                .$email."', '".$gender."', '".$address."', '".$post_code."', '".$password."')";
        
        return $this->getConnections()->query($sql);
    }
    
    public function login($email, $password) {
        $sql = "select * from users where email = '".$email."' and password = '".$password."'";
        $res = $this->getConnections()->query($sql);
        
        $count = mysqli_num_rows($res);
        
        if($count > 0) {
            return true;
        }
            
        return false;
        
    }
    
	
    public function getAllLodge($type) {
        $sql = "select * from log where log_type='".$type."'";
        $res = $this->getConnections()->query($sql);
        
        return mysqli_fetch_all($res);
    }
    
    public function getUsersID($email, $password) {
        $sql = "select id from users where email = '".$email."' and password = '".$password."'";
        $res = $this->getConnections()->query($sql);
        
        return mysqli_fetch_row($res);
    }
    
    public function getLodgeImage($lodge_id) {
        $sql = "select photo_name from log where log_id = ".$lodge_id;
        $res = $this->getConnections()->query($sql);
        
        return mysqli_fetch_row($res);
    }
    
    public function book($user_id, $log_id, $month, $price) {
        $res = 0;
        try {
            $sql = "insert into booking values(NULL, ".$user_id.", ".$log_id.", '".$month."', ".$price.")";
            $res = $this->getConnections()->query($sql);
        } catch (Exception $ex) {
            echo $ex->getMessage();
        }
        return $res;
    }
    
    public function getCost($lodge_id) {
        $sql = "select price from log where log_id = ".$lodge_id;
        $res = $this->getConnections()->query($sql);
        
        return mysqli_fetch_row($res);
    }
    
    public function getUserName($user_id) {
        $sql = "select first_name from users where id=".$user_id;
        $res = $this->getConnections()->query($sql);
        
        return mysqli_fetch_row($res);
    }
    
    public function sendMessage($id, $message) {
        $sql = "insert into community values(null, ".$id.", '".$message."')";
        $res = $this->getConnections()->query($sql);
        
        return $res;
    }
    
    public function getMessage() {
        $sql = "select * from community order by id desc";
        $res = $this->getConnections()->query($sql);
        
        return mysqli_fetch_all($res);
    }
    
}
