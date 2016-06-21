<?php
/**
 * Created by PhpStorm.
 * User: Himauli
 * Date: 14-Jun-16
 * Time: 10:56 PM
 */

namespace models;

use helper\Helper;

class Model
{


    public $attributes = [] ;

    public function classNameWithoutNameSpace($class)
    {
        //echo "class";
        $classArray = explode("\\", $class);

        //  models\new\Users
        //  $class =  models\Users => ["models","new","Users"]
        //Helper::printR("kjcfj");
        //Helper::printR($classArray);

        return $classArray[sizeof($classArray)-1];
    }


    public function save($tblName , $insert = 1)
    {
        $attributes = $this->attributes ;

        $sql = ' INSERT INTO  ' ;
        $sql .=  ' '.$tblName.' ';

        $sqlA = "" ;
        $sqlV = " ( " ;
        oreach($attributes as $k=>$val)
        {
            $sqlA .= "  `".$k."`," ;
            $sqlA .= "  ".$val."," ;
        }
         $sqlV = " ) " ;

//$sql


        exit;
    }

}

?>