<?php
require 'tracy/tracy.phar';
use Tracy\Debugger;
Debugger::enable();
Debugger::$strictMode = true;

$a = 1;
$b = 2;
dump($a == $b);

?>














