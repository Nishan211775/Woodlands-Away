<?php

include_once ('DBConnection.php');

class Admin extends DBConnection {
    
    public function Admin() {
        parent::DBConnection();
    }
    
    public function signup($username, $password) {
        $sql = "";
        $res = 0;
        
        try {
            $sql = "insert into admins values(NULL, '".$username."', '".$password."')";
            $res = $this->getConnections()->query($sql);
            
        } catch (SQLException $ex) {
            echo $ex->getMessage();
        }
        
        return $res;
    }
    

    public function login($username, $password) {
        $sql = "select * from admins where username = '".$username."' and password = '".$password."'";
        $res = $this->getConnections()->query($sql);
        
        $count = mysqli_num_rows($res);
        
        if($count > 0) {
            return true;
        }
            
        return false;
        
    }
    
    public function saveLog($log_type, $des, $price, $pname) {
        $sql = "insert into log values(NULL, '".$log_type."', '".$des."', '".$price."', '".$pname."')";
        $res = $this->getConnections()->query($sql); 
        
        return $res;       
    }
    
    public function savePrice($type, $jan, $feb, $mar, $apr, $may, $jun, $jul, $aug, $sep, $oct, $nov, $dec) {
        
        try {
            $sql = "insert into price values(NULL, '".$type."', '".$jan."', '".$feb."', '".$mar."',"
                . " '".$apr."', '".$may."', '".$jun."', '".$jul."', '".$aug."', '".$sep."', '".$oct."', '".$nov."', '".$dec."')";
        
            $res = $this->getConnections()->query($sql);
            
            return $res;
        } catch (Exception $ex) {
            return $ex;
        }
        
        return 0;
    }
    
    public function showBooking() {
        $sql = "select * from booking";
        $res = $this->getConnections()->query($sql);
        
        return mysqli_fetch_all($res);
    }
    
    public function getLodgeType($id) {
        $sql = "select log_type from log where log_id=".$id;
        $res = $this->getConnections()->query($sql);
        
        return mysqli_fetch_row($res);
    }
    
    public function deleteBooking($id) {
        $sql = "delete from booking where id=".$id;
        $res = $this->getConnections()->query($sql);
        
        return $res;
    }
    
    public function updateBooking($date, $price) {
        $sql = "update booking set month='".$date."' ,price='".$price."'";
        $res = $this->getConnections()->query($sql);
        
        return $res;
    }
}
