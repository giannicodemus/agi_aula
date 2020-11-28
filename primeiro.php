#!/usr/bin/env php
<?php

require "/var/lib/asterisk/agi-bin/agi_aula/vendor/autoload.php";

use d4rkstar\phpagi\phpagi;


//Estancia AGI
$agi = new \AGI();

$ARQUIVO_AUDIO = $agi->get_variable('AUDIO');

$agi->exec("Playback", $ARQUIVO_AUDIO['data']);
