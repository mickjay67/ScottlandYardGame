<?php
/**
 * Created by PhpStorm.
 * User: Eric
 * Date: 3/27/2018
 * Time: 10:07 PM
 */
class Session{
    public function __construct(){
        session_start();
        echo 'Session Started<br>';
    }
    public function register($name, $object){
        $_SESSION[$name] = serialize((object) $object);
    }
    public function get($name){
        return unserialize($_SESSION[$name]);
    }
    public function show(){
        echo '<pre>';
        print_r($_SESSION);
        echo '</pre>';
    }
}