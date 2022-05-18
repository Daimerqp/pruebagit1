<?php
class Conexion{
    private $host;
    private $drive;
    private $base;
    private $user;
    private $pass;
    private $url;
    private $charSet;

    /*constructor */
    public function __construct(){
        $this -> $host = "localhost";
        $this -> $drive = "mysql";
        $this -> $base ="adsi56";
        $this -> $user = "root;"
        $this -> $pass ="";
        $this -> $url ="";
        $this -> $charSet = "UTF8";
    }//END CONSTRUCT
    
}//END CLASS

?>