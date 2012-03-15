<?php

/**
 * Description of MySqlLoger
 *
 * @author edrichard
 */
class MySqlLoger {
    const SERVER = "localhost";
    const LOGIN = "root";
    const PASS = "alonso";
    const BASE = "test"; 
    const TABLE = "logs";
    
    private $link;
    private static $instance = null;
    
    private function __construct() {
        $this->link = mysqli_connect(self::SERVER, self::LOGIN, self::PASS, self::BASE);
    }
    
    public static function getInstance(){
        if(self::$instance == NULL){
            $class = get_class();
            self::$instance = new $class;
        }
        return self::$instance;
    }


    public function log($message){
        $message = htmlspecialchars($message);
        $message = mysqli_real_escape_string($this->link, $message);
        
        $timestamp = time();
        $table = self::TABLE;
        
        $query = "INSERT INTO $table (time, message) VALUES (now(),'$message')";
        mysqli_query($this->link, $query);
    }
    
    public function __destruct() {
        mysqli_close($this->link);
    }
}

?>
