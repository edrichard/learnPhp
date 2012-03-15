<?php

/**
 * Description of FileLoger
 *
 * @author edrichard
 */
class FileLoger {
    const monFichier = "log.txt";
    private $fileRessource;
    private static $instance = null;


    private function __construct() {
        $this->fileRessource = fopen(self::monFichier, 'a');
    }
    
    public static function getInstance(){
        if(self::$instance == NULL){
            self::$instance = new FileLoger();
        }
        return new FileLoger();
    }


    public function log($message){
        fwrite($this->fileRessource, $message."\n");
    }
    
    public function __destruct() {
        fclose($this->fileRessource);
    }
}

?>
