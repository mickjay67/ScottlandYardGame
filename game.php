<?php
/**
 * Created by PhpStorm.
 * User: Eric
 * Date: 3/27/2018
 * Time: 3:02 PM
 */
class Game
{
    public $player = array(); //Added array for multiple players
    public $mrx = array(); // Here too... why not, could create several spies

    public function __construct()
    {
        echo "Start Game<br>";
        //Needs a game state loop
    }
    public function create($type, $name){
        $type = strtolower($type);
        // Needs more error handling for duplicate name, name with space, numbers???
        // Anything else?
        switch ($type){
            // Switch between player types
            case 'player':
                $this->player[$name] = new Player($this, $name);
                break;
            case 'mrx':
                $this->mrx[$name] = new mrx($this, $name);
                break;
            default:
                echo "That word, I do not think it means, what you think it means <br>";
        }
    }
}
?>