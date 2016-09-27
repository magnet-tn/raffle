<?php
# logic.php

$contestants["mike"] = "loser";
$contestants["jane"] = "loser";
$contestants["katie"] = "loser";
$contestants["bill"] = "loser";
$contestants["ted"] = "loser";
$contestants["lara"] = "loser";
$contestants["shelly"] = "loser";
$contestants["brad"] = "loser";

// echo "<pre>";
// var_dump($contestants);
// echo "</pre>";

$winner = array_rand($contestants, 1);
$contestants[$winner] = "winner";
