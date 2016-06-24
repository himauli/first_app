<?php
/**
 * Created by PhpStorm.
 * User: Himauli
 * Date: 14-Jun-16
 * Time: 10:56 PM
 */

namespace models;

use connection\Connection;
use helper\Helper;

class Model
{
    
    public $attributes = [] ;

    public function classname()
    {
        return __CLASS__ ;
    }

    public function tableName()
    {
        return "himauli";
    }

    public function classNameWithoutNameSpace($class)
    {
        $classArray = explode("\\", $class);
        return $classArray[sizeof($classArray)-1];
    }

    public function save($insert = 1)
    {
        $tblName = $this->tableName() ;
        $this->applyDefaultValue($insert);
        $attributes = $this->attributes ;



        $sql = ' INSERT INTO  ' ;
        $sql .=  ' '.$tblName.' ';
        //  $sql = $sql.' '.$tblName.' '; ;
        // INSET INTO
        //  A = 3 ;
        //  A = A+2 ;
        //  a += 2 ;
        // A .=

        $sqlA = " ( " ;
        $sqlV = " VALUES ( " ;
        foreach($attributes AS $k=>$val)
        {
            if($val == "UNIX_TIMESTAMP()")
            {
                $sqlA .= "  `".$k."`," ;
                $sqlV .= "  ".$val."," ;
            }
            else if(Helper::stringNotNull($val))
            {
                $sqlA .= "  `".$k."`," ;
                $sqlV .= "  '".$val."'," ;
            }
        }

        $sqlA = trim($sqlA, ',');
        $sqlV = trim($sqlV, ',');

        $sqlA .= " ) " ;
        $sqlV .= " ) " ;


        $sql .=  $sqlA.$sqlV ;


        //Helper::printR($sql);

        $c = new Connection();
        $result = $c->query($sql);

        return $result ;
    }

    public function defaultValues($insert)
    {
        if($insert)
        {
            return [
                'created_at'=>'UNIX_TIMESTAMP()',
                'updated_at'=>'UNIX_TIMESTAMP()',
            ];
        }
        else
        {
            return [
                'updated_at'=>'UNIX_TIMESTAMP()'
            ];
        }
    }

    public function applyDefaultValue($insert)
    {
        // A  = 5 ;
        $attributes = $this->attributes ;
        $p = $this->defaultValues($insert) ;


        foreach ($p as $k=>$val)
        {
            if(Helper::arrayKeyExist($k, $attributes, 0))
            {
                if(Helper::stringNull($this->attributes[$k]))
                {
                    $this->attributes[$k] = $val ;
                }
            }
        }
    }

    public function attributeLabels()
    {
        return [
            "user_id"=>"User",
            "first_name"=>"First Name",
            "last_name"=>"Last Name",
            "email"=>"Email Address",
            "username"=>"Username",
            "password"=>"Password",
            "profile_picture"=>"Profile Picture",
            "cover_picture"=>"Cover Picture",
            "contact_no"=>"Contact No",
            "created_at"=>"Created At",
            "updated_at"=>"Updated At"
        ];
    }


    public function loadPostData($post)
    {
        $attributeLables =  $this->attributeLabels();


        //Helper::printR("Attribute labels",0);
        //Helper::printR($attributeLables , 0);

        foreach($attributeLables as $k=>$val)
        {

            if(Helper::arrayKeyExist($k, $post))
            {
                $this->attributes[$k] = $post[$k];
            }
            else
            {
                $this->attributes[$k] = null ;
            }

        }

        // Helper::printR("JAIMIN", 0);
        //  Helper::printR($this->attributes);

        return $this->attributes ;
    }


    public function getAttributeLable($attribute)
    {
        $attributeArray = $this->attributeLabels();
        return Helper::arrayKeyExist($attribute, $attributeArray);
    }

    public function getName($attribute)
    {
        $className = $this->classname();
        $c = $this->classNameWithoutNameSpace($className);
        return $c."[".$attribute."]";
    }

    public function getId($attribute)
    {
        $className = $this->classname();
        $c = $this->classNameWithoutNameSpace($className);
        return strtolower($c)."-".$attribute;
    }

    public function getHolderId($attribute)
    {
        $className = $this->classname();
        $c = $this->classNameWithoutNameSpace($className);
        return strtolower($c)."-holder-".$attribute;
    }

}

?>