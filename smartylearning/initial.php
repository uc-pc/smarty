<?php

/**

 * Example Application

 *

 * @package Example-application

 */

require ('../libs/Smarty.class.php.php');

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


// Assignment in smarty
$smarty->assign('title', 'Smarty Assignment');
$smarty->assign('heading', 'Welcome to my page!');
$smarty->assign('content', 'This is the content of my page.');
$smarty->assign("name", "Prashant Chaudhary"); 
$smarty->assign("profile", "Web Developer Trainee");
$smarty->assign("para", "Lorem ipsum dolor sit, amet consectetur adipisicing elit. Libero at repudiandae cupiditate perferendis iste voluptate delectus assumenda asperiores, nulla tenetur hic culpa qui maxime veniam quam amet blanditiis eos ullam repellendus?");

// Array 
$smarty->assign('arr1', array("Ironman", "Captain America", "Thor", "Deadpool")); 
$smarty->assign('skills', array("HTML/CSS", "PHP & MySql", "Python", "Machine Learing")); 
$smarty->assign('contact', array('Name' => 'Prashant Chaudhary', 'Email-Id' => 'prashant.chaudhary@ucertify.com', 'Mobile Number' => '9876543210')); 


// Loop
$smarty->assign('start',25);
$smarty->assign('to',15);

// If-Else
$smarty->assign('fname','Julia');
$smarty->assign('number',18);

// Section
$smarty->assign('init',10);
$smarty->assign('end',25);

// While Loop
$smarty->assign('wloop',12);

// Mathematics Addition
$smarty->assign('height',10);
$smarty->assign('width',25);

$smarty->display('Template/initial.tpl'); 