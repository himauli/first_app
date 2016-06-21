<?php
/**
 * Created by PhpStorm.
 * User: Himauli
 * Date: 14-Jun-16
 * Time: 10:39 PM
 */

namespace config;

use helper\Helper;

class Config {

    public function returnConfig()
    {
        //  [] , array("1","2"),  {"1","3"}

        return [

            // database configurations
            "database"=>[
                "host"=>"localhost",
                "username"=>"root",
                "password"=>"",
                "db"=>"first_app"
            ],

            "app_name"=>"New App"

           // "databasedjbhbgimjfbb"=>"Himauli"

        ];
    }
     public function getConfig($key)
     {
         //Helper::printR($key , 0);
         $returnConfig = $this->returnConfig();
         //Helper::printR($returnConfig, 0);

         if(array_key_exists($key, $returnConfig))
         {
             return $returnConfig[$key];
         }
         else
         {
             throw new \Exception($key." is not a config.", 404);
         }

     }

}


?>