<?
    // define all of our constants
    DEFINE('OH_TAX_RATE', .0725);

    // set up our database connections (more later in lecture)

    // require our function libraries
    require_once("functions/arrayFunctions.php");

    // require references to our classes that we may use
    // require_once("classes/person_class.php");
    // require_once("classes/paycheck_class.php");

   // spl autoload register is a magic function.... 
   // when you intantiate an object of a class, PHP first looks for that class in includes
   // if it can't find it, it looks to see if you have an autoload function which tells php 
   // where classes should be found
    spl_autoload_register(function ($class_name) {
        // $class_name variable will be passed in automatically and it is the name of the 
        // class for which PHP is trying to instantiate an object of
        // this require once builds a path to your classes.... 
        // __dir__ is another magic function which says, start in the current directory from where you 
        // are calling this function (object instantiation)... add to that path classes/
        // name of the class ... and add to that _class.php
        // require that file which is the same as entering each class one by one in require_once statements 
        // above 
        require_once(__dir__ . "/classes/" . $class_name . "_class.php");
    });

?>