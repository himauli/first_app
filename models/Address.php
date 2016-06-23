<?php
/**
 * Created by PhpStorm.
 * User: Himauli
 * Date: 23-Jun-16
 * Time: 9:25 PM
 */

namespace models;


class Address extends Model{

    public function classname()
    {
        return __CLASS__ ;
    }

    public function tableName()
    {
        return "address";
    }

    public function attributeLabels()
    {
        return [
            "house_no"=>"House No.",
            "street"=>"Street",
            "city"=>"City",
            "state"=>"State",
            "created_at"=>"Created At",
            "updated_at"=>"Updated At"
        ];
    }

    public function defaultValues($insert)
    {
        if($insert)
        {
            return [
                'created_at'=>'UNIX_TIMESTAMP()',
                'updated_at'=>'UNIX_TIMESTAMP()',
                'state'=>'Gujarat'
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