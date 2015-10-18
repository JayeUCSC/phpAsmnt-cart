<?php
	
class DB{

	private static $host         = 'localhost';
	private static $db_user      = 'root';
	private static $db_user_pass = '';
	private static $db_name      = 'php_assignment';
	
	private static $cont  = null;
     
    public function __construct() {
        die('Init function is not allowed');
    }
     
    public static function connect()
    {
       // connection
       if ( null == self::$cont )
       {     
        try
        {
          self::$cont =  new PDO( "mysql:host=".self::$host.";"."dbname=".self::$db_name, self::$db_user, self::$db_user_pass); 
        }
        catch(PDOException $e)
        {
          die($e->getMessage()); 
        }
       }
       return self::$cont;
    }
     
    public static function disconnect()
    {
        self::$cont = null;
    }
}
?>