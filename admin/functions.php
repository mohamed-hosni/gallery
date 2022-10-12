<?php
function __autoload($class){

    $the_path="includes/{$class}.php";
    if(file_exists($the_path))
    {
        include($the_path);
    
    }
    else
    {
        die("this file name {$class}.php was not found");
    
    }

}

function redirect($location){

    header("location:{$location}.php");
}

?>