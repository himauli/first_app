<?php
/**
 * Created by PhpStorm.
 * User: Himauli
 * Date: 24-Jun-16
 * Time: 9:46 PM
 */

namespace models;


class Book extends Model{

    public function classname()
    {
        return __CLASS__ ;
    }

    public function tableName()
    {
        return "books";
    }

    public function attributeLabels()
    {
        return [
            "book_title"=>"Book Title",
            "book_author"=>"Book Author",
            "book_type"=>"Book Type",
            "book_prise"=>"Book Prise",
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
                'book_type'=>'Novel'
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