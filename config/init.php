<?php 
//Start Session
session_start();


/*
instead of doing include of multiple files at the top of all root files,
we will create a config file to set all that up, as well as an auto loader too 
so we  dont have to manually include every class*/


//require_once('lib/Template.php')
/*We will have multiple libs so instead of writing this for all of them and having to include them as 
we add more we can use an autoloader which will include the file whenever youinstantiate the template*/

//Config File
require_once 'config.php';

//Include Helpers
require_once'helpers/system_helper.php';


//Autoloader
//function __autoload ($class_name){
//    require_once 'lib/'.$class_name.'.php';

//function my_autoloader($class_name){
//    require_once 'lib/'.$class_name.'.php';
//    }
//    spl_autoload_register('my_autoloader');
    
    spl_autoload_register(function ($class_name){
            require_once 'lib/'. $class_name . '.php';

    });
