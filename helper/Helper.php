<?php
/**
 * Created by PhpStorm.
 * User: Himauli
 * Date: 14-Jun-16
 * Time: 11:17 PM
 */
namespace helper;

class Helper {

    public static function stringNotNull($string)
    {
        return ($string != "" && $string != null);
    }

    public static function stringNull($string)
    {
        return !self::stringNotNull($string);
    }

    public static function printR($data, $exit = 1)
    {
        echo "<pre></br>";
        print_r($data);
        if ($exit == '1') {
            exit;
        }

        echo "</pre></br>";
    }

    public static function printRT($data, $title = null , $exit = 0)
    {
        AppBasic::printR($title." START ", 0);
        AppBasic::printR($data, 0 );
        AppBasic::printR($title." END ", $exit);
    }

    public static function arrayKeyExist($key, $array , $returnValue = 1, $returnArray = 0)
    {
        if($returnValue)
        {
            return is_array($array) ? array_key_exists($key , $array) ? $array[$key] : ( $returnArray ? [] : null ) : ( $returnArray ? [] : null ) ;
        }
        else
        {
            return is_array($array) ? ( array_key_exists($key , $array) ? true : false ) : false ;
        }
    }

    public static function url(){
        return sprintf(
            "%s://%s%s",
            isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] != 'off' ? 'https' : 'http',
            $_SERVER['SERVER_NAME'],
            $_SERVER['REQUEST_URI']
        );
    }

    //  %s://%s%s
    //  first_app
    // http://localhost/

    //  (1==1) ? 1 : 0 ; $_
    //       isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] != 'off'
    // ? 'https'
    // : 'http',

}

?>