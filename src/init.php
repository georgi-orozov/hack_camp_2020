<?php
//Will autoload certain classes when needed throughout entire project.
session_start();
//loads different class types
spl_autoload_register(function($class_name){
//loads any of the class names.
    include "$class_name.php";


});
//creates a new source class.
$source = new source;

?>
