<?php

class Database
{
    /*this is database class */
    public static $con;
    public function __construct()
    {
        try{ 

            $string = DB_TYPE . ":host=". DB_HOST .";dbname=" . DB_NAME;
            self::$con = new PDO($string,DB_USER,DB_PASSWORD);

        }
        catch (PDOExceoption $e)
        {
        die ($e->getMessage());
        }
    }    
    public static function getInstance()
    {
        if(self::$con)
        {
             return self::$con;
        }
        return $instance = new self();
         
     }
    /*read from db */
    public function read($query,$data = array())
    {
        $stm = self::$con->prepare($query);
        $result = $stm->execute($data);

        if($result)
        {
        $data = $stm->fetchAll(PDO::FETCH_OBJ);
        if(is_array($data))
        {
            return $data;
        }
        }
        return false;
    }
    /*write to db */
    public function write($query,$data = array())
    {
        $stm = self::$con->prepare($query);
        $result = $stm->execute($data);

        if($result)
        {
            return true;
        }
        
        return false;
    }
}

 
