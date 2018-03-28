<?php
/**
 * Created by PhpStorm.
 * User: Eric
 * Date: 3/27/2018
 * Time: 3:00 PM
 */
// mrx is child class of Abstract_Character, anything both type of characters do
// should go in there.
class mrx extends Abstract_Character {
    // seperate move function for Mr. X?
    public function __construct(Game $g, $name){
        $this ->_name = $name;
        echo "Mr X {$this->_name} Created:<br>";
    }
    public function double_move(){
        echo "Go go gadget shoes!";
        //mrx moves twice in a row...
    }
    public function location_type(){
        echo "I took a (movement type) here";
        // print to travel log on screen
    }
    public function use_hide(){
        echo "Mr. X uses obscures his movements with a smoke bomb!";
    }
}