<?php
//Note to ME: THIS BALONEY crashes in Chrome because it keeps trying to load
// SESSION data from old files... I think. FireFox works.
//NEXT UP ADD mySQL
/**
 * Created by PhpStorm.
 * User: Eric
 * Date: 3/27/2018
 * Time: 3:03 PM
 */
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
include 'Session.php';
include 'game.php';
include 'player.php';
include 'mrx.php';

//include 'map-generator/map-generator.php';
echo "What's up? Gotta start somewhere.<br><br>";
// new session... put all the session crap in it's own file.
$sess = new Session();
$game = new Game();
// game stuff
echo "<br>";
$game -> create('player', 'Mike');
$game ->player['Mike']->setUnderground('4');
$game ->player['Mike']->setBus('8');
$game ->player['Mike']->setTaxi('12');
$game ->player['Mike']->setTurns('28');
$game->player['Mike']->show();
$sess->register('Mike', $game->player['Mike']);

$game -> create('player', 'Cheikh');
$game ->player['Cheikh']->setUnderground('4');
$game ->player['Cheikh']->setBus('8');
$game ->player['Cheikh']->setTaxi('11');
$game ->player['Cheikh']->setTurns('28');
$game->player['Cheikh']->show();
$sess->register('Cheikh', $game->player['Cheikh']);

$game -> create('player', 'Eric');
$game ->player['Eric']->setUnderground('4');
$game ->player['Eric']->setBus('8');
$game ->player['Eric']->setTaxi('11');
$game ->player['Eric']->setTurns('28');
$game->player['Eric']->show();
$sess->register('Eric', $game->player['Eric']);

// Mr. X tickets are from the discard pile? I think...?
// I just gave him same as players for now.
$game -> create('mrx', 'unknown');
$game ->mrx['unknown']->setUnderground('4');
$game ->mrx['unknown']->setBus('8');
$game ->mrx['unknown']->setTaxi('11');
$game ->mrx['unknown']->setTurns('28');
$game->mrx['unknown']->show();
$sess->register('unknown', $game->mrx['unknown']);

//$sess ->get('Mike');
$sess ->show();
$game->player['Mike'];
//$game->import('Mike', $sess->get('Mike'));