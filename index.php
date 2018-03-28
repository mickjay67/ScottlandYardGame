<?php
// READ ME:
//Index file-- create Players, and call new Game
//Game file-- Game state/loop (eventually), Player creation
//Abstract_Character-- Parent Class for player and mrx
//player-- User character
//mrx-- NPC character
//map-generator file-- Stuff I found (didn't write) thought it might be useful if we
//wanted to go procedural generation route. We *could* create one giant table like that
//filled with map-tile objects.
include 'Abstract_Character.php';
/**
 * Created by PhpStorm.
 * User: Eric
 * Date: 3/27/2018
 * Time: 3:03 PM
 */
include 'game.php';
include 'player.php';
include 'mrx.php';
//include 'map-generator/map-generator.php';
echo "What's up? Gotta start somewhere.<br><br>";
$game = new Game();
echo "<br>";
$game -> create('player', 'Mike');
$game ->player['Mike']->setUnderground('4');
$game ->player['Mike']->setBus('8');
$game ->player['Mike']->setTaxi('12');
$game ->player['Mike']->setTurns('28');
$game->player['Mike']->show();

$game -> create('player', 'Cheik');
$game ->player['Cheik']->setUnderground('4');
$game ->player['Cheik']->setBus('8');
$game ->player['Cheik']->setTaxi('11');
$game ->player['Cheik']->setTurns('28');
$game->player['Cheik']->show();

$game -> create('player', 'Eric');
$game ->player['Eric']->setUnderground('4');
$game ->player['Eric']->setBus('8');
$game ->player['Eric']->setTaxi('11');
$game ->player['Eric']->setTurns('28');
$game->player['Eric']->show();

// Mr. X tickets are from the discard pile? I think...?
// I just gave him same as players for now.
$game -> create('mrx', 'unknown');
$game ->mrx['unknown']->setUnderground('4');
$game ->mrx['unknown']->setBus('8');
$game ->mrx['unknown']->setTaxi('11');
$game ->mrx['unknown']->setTurns('28');
$game->mrx['unknown']->show();

