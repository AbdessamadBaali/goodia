<?php


Class Database 
{
    protected $DB_NAME = "goodia";
    protected $DB_USER = "root";
    protected $DB_PASS = "";
    protected $DB_HOST = "localhost";
    protected $DB_TYPE = "mysql";
    protected $DB_PORT = "3306";
    protected $conn;

    public function __construct(){

        try 
        {

            $string = $this->DB_TYPE . ":host=" . $this->DB_HOST . ";dbname=" . $this->DB_NAME;
            $this->conn = new PDO($string, $this->DB_USER, $this->DB_PASS);

        } catch(PDOException $e) 
        {

            print("<script>alert('Error!:  ".$e->getMessage()."<br/>')</script>");
            die();
        }
        
    }

}