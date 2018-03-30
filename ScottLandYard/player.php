<?php
/**
 * Created by PhpStorm.
 * User: Eric
 * Date: 3/27/2018
 * Time: 3:00 PM
 */
class Player extends Abstract_Character{

    public function __construct(Game $g, $name){
        $this ->_name = $name;
        echo "Player {$this->_name} Created:<br>";
    }
}