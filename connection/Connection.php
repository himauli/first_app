<?php
/**
 * Created by PhpStorm.
 * User: Himauli
 * Date: 14-Jun-16
 * Time: 10:31 PM
 */

namespace connection;
use config\Config;
use helper\Helper as H;

class Connection {

     public function init()
     {
         $c = new Config();
         $dbConfig = $c->getConfig('database');

         $host = H::arrayKeyExist('host',$dbConfig);
         $username = H::arrayKeyExist('username',$dbConfig);
         $password = H::arrayKeyExist('password',$dbConfig);
         $db = H::arrayKeyExist('db',$dbConfig);

         $conn = mysqli_connect($host, $username, $password, $db);
         if (mysqli_connect_errno())
         {
             echo "Failed to connect to MySQL: " . mysqli_connect_error();
         }

         //H::printR($conn);

         return $conn;
     }

     public function query($sql)
     {
         $conn = $this->init() ;
         $response = $conn->query($sql);
         return $response ;
     }

}

?>