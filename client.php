<?php 

require_once('OracleCommands.php');
require_once('MysqlCommands.php');
require_once('MysqlAdapter.php');

$oracle = new OracleCommands();
$oracle->insert();

print '<br />';

$mysql = new MysqlAdapter(new MysqlCommands);
$mysql->update();