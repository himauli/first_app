<?php
/**
 * Created by PhpStorm.
 * User: Himauli
 * Date: 14-Jun-16
 * Time: 10:55 PM
 */


namespace models;

use helper\Helper;

class Users extends Model
{



    public function tableName()
    {
        return "users";
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

    public function getAttributeLable($attribute)
    {
        $attributeArray = $this->attributeLabels();
        return Helper::arrayKeyExist($attribute, $attributeArray);
    }

    public function getName($attribute)
    {
        $c = $this->classNameWithoutNameSpace(__CLASS__);
        return $c."[".$attribute."]";
    }

    public function getId($attribute)
    {
        $c = $this->classNameWithoutNameSpace(__CLASS__);
        return strtolower($c)."-".$attribute;
    }

    public function getHolderId($attribute)
    {
        $c = $this->classNameWithoutNameSpace(__CLASS__);
        return strtolower($c)."-holder-".$attribute;
    }


    public function loadPostData($post)
    {
        $attributeLables =  $this->attributeLabels();

        Helper::printR("Attribute labels",0);
        Helper::printR($attributeLables , 0);

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


}



?>