<?php

class Node{
	
	private string $name;
	private array $taxiNeighs = array();
	private array $busNeighs = array();
	private array $underNeighs = array();	
	private array $ferryNeighs = array();
	private bool $mrX = false;
	private bool $player = false;
	private int $xPos;
	private int $yPos;
	
	public function setName($newName){
		$this->$name = $newName;
	}
	public function getName(){
		return 	$this->$name;	
	}
	
	public function swapMrX(){
		if ($this->$mrX){
			$this->$mrX = false;
		}
		else{
			$this->$mrX = true;			
		}		
	}
	
	public function swapPlayer(){
		if ($this->$player){
			$this->$player = false;
		}
		else{
			$this->$player = true;			
		}		
	}
	
	public function setX($newX){
		if (!isset($this->$xPos)){
			$this->$xPos = $newX;
		}		
	}
	public function getX(){
		return $this->$xPos;
	}
	
	public function setY($newY){
		if (!isset($this->$yPos)){
			$this->$yPos = $newY;
		}		
	}
	public function getY(){
		return $this->$yPos;
	}
	
	//neighbors, do we do one function for each type of neighbor or one big one?

}

?>