<?php
/**
 * Created by PhpStorm.
 * User: Himauli
 * Date: 22-Jun-16
 * Time: 9:29 PM
 */

namespace models;


class Admin extends Model{

    public function classname()
    {
        return __CLASS__ ;
    }

    public function tableName()
    {
        return "admin";
    }

    public function attributeLables()
    {
        return[
            "user_id"=>"User",
            "first_name"=>"First Name",
            "last_name"=>"Last Name",
            "email"=>"Email Id",
            "password"=>"Password"
        ];
    }
}