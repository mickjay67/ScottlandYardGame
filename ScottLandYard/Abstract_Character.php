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
    protected $_underground;
    protected $_taxi;
    protected $_bus;

    public function setTurns($int){
        // probably make turn var public and session? we need to subtract one every time...
        $this->_turns = ($int);
    }
    public function setUnderground($int){
        $this->_underground = ($int);
    }
    public function setBus($int){
        $this->_bus = ($int);
    }
    public function setTaxi($int){
        $this->_taxi = ($int);
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
    public function getName(){
        return $this->_name;
    }
    public function getTurns(){
    return $this->_turns;
}
    public function getUnderground(){
        return $this->_underground;
    }
    public function getBus(){
        return $this->_bus;
    }
    public function getTaxi(){
        return $this->_taxi;
    }
    public function __toString(){
        return "Name: {$this ->_name} | Subway Tickets: {$this ->_underground}  
         | Bus Tickets: {$this ->_bus} | Taxi Tickets: {$this ->_taxi} | Turns: {$this ->_turns}<br><br>";
    }
}