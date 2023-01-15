<?php
// Client Code

require "vendor/autoload.php";

use Builder2\MySQLQueryBuilder;

$builder = new MySQLQueryBuilder();

$query1 = $builder->select('goal', ['eteam.teamname', 'goal.player'])
 ->join('game', 'goal.matchid', 'game.id')
 ->join('eteam', 'goal.teamid', 'eteam.id')
 ->where('goal.matchid', '=', '1004')
 ->getSQL();

echo $query1;

echo "\n\n-------------------------\n\n";


$query2 = $builder->select('eteam', ['eteam.coach'])
 ->join('goal', 'goal.teamid', 'eteam.id')
 ->where('goal.player', '=', 'Mario Gómez')
 ->getSQL();

echo $query2;

echo "\n\n-------------------------\n\n";


$query3 = $builder->select('game', ['goal.player', 'eteam.teamname', 'eteam.coach'])
 ->join('goal', 'goal.matchid', 'game.id')
 ->join('eteam', 'goal.teamid', 'eteam.id')
 ->where('game.mdate', '=', '15 June 2012')
 ->getSQL();

echo $query3;

echo "\n\n-------------------------\n\n";


$query4 = $builder->select('goal', ['eteam.teamname', 'goal.gtime'])
 ->join('eteam', 'goal.teamid', 'eteam.id')
 ->where('goal.gtime', '<', '10')
 ->getSQL();

echo $query4;

var_dump($builder);
?>