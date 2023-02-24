<?php

/**

 * Example Application

 *

 * @package Example-application

 */

require './libs/Smarty.class.php.php';

//error_reporting(E_ALL);

//ini_set('display_errors','On');

//$smarty->debugging_ctrl = ($_SERVER['SERVER_NAME'] == 'localhost') ? 'URL' : 'NONE';

$smarty = new Smarty; // declare object in Smarty 

$smarty->allow_php_templates = true;

$smarty->setCaching(Smarty::CACHING_LIFETIME_CURRENT);

//$smarty->auto_literal = false;

$smarty->force_compile = true;

$smarty->debugging = false;


$smarty->caching = true;

$smarty->cache_lifetime = 120;

echo "<h1> hi</h1>";