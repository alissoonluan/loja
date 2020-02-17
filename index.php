<?php

require './lib/autoload.php';

$smarty = new Template();



//Valores para o template
$smarty->assign('NOME', 'ALISSON');

$smarty->display('index.tpl');

?>