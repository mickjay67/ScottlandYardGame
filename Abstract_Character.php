<?php
/**
 * Created by PhpStorm.
 * User: Eric
 * Date: 3/27/2018
 * Time: 3:52 PM
 */
abstract class Abstract_Character{
    // protected can be shared among files, private no.
    protected $_name;
    protected $_turns;
    // session variable or MySQL for tickets?
    public $underground;
    public $taxi;
    public $bus;

    public function setTurns($int){
        // probably make turn var public and session? we need to subtract one every time...
        $this->_turns = ($int);
    }
    public function setUnderground($int){
        $this->underground = ($int);
    }
    public function setBus($int){
        $this->bus = ($int);
    }
    public function setTaxi($int){
        $this->taxi = ($int);
    }
    public function move(){
        echo "Shoes to pavement boys";
        // check connected nodes, if they contain a player
        //move somehow...
    }
    public function reveal_location(){
        echo "Hey guys over I'm over here!";
        // print location to travel log?
    }
    public function show(){
        echo $this;
    }
    public function __toString(){
        return "Name: {$this ->_name} | Subway Tickets: {$this ->underground}  
         | Bus Tickets: {$this ->bus} | Taxi Tickets: {$this ->taxi} | Turns: {$this ->_turns}<br><br>";
    }
}