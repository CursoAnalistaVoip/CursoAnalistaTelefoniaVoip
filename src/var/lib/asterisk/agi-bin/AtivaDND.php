#!/usr/bin/php
<?php

include_once "phpagi-2.20/phpagi.php";

$agi = new AGI();


$ativa = $agi->get_variable("DNDativa");

$agi->exec("NoOp","Ramal\ ativando\ DND:\ " .$ativa[data]);
$agi->exec("Playback", "DND_ativado");
$agi->exec('Wait',"1");


$agi->database_put('DND', ($ativa[data]), 1);#!/usr/bin/php
<?php

include_once "phpagi-2.20/phpagi.php";

$agi = new AGI();
