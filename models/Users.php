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

    public function classname()
    {
        return __CLASS__ ;
    }

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

    public function defaultVaulues($insert)
    {
        if($insert)
        {
            return [
                'created_at'=>'UNIX_TIMESTAMP()',
                'updated_at'=>'UNIX_TIMESTAMP()',
                'cover_picture'=>'Jaimin MosLake'
            ];
        }
        else
        {
            return [
                'updated_at'=>'UNIX_TIMESTAMP()'
            ];
        }
    }

}



?>