<?php 

require_once('OracleCommands.php');
require_once('MysqlCommands.php');

$oracle = new OracleCommands();
$oracle->insert();

$mysql = new MysqlAdapter(new MysqlCommands);
$mysql->insert();