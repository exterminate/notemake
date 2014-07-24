<?php

// notemaker app
require 'core.php';

$app = new App();

class Display {
    
    function __construct($page, $title, $meta) {
        $this->page = $page;
        $this->title = $title;
        $this->meta = $meta;
        
    }
    
    function display() {
        if(isset($this->meta['use'])) include $this->meta['use']; else include "404.php";  
    }

    
    function meta() {
        echo $this->meta['content'];
    }
}


$homepage = new Display(
    "/", // page
    "home page", // title
    array("use" => "form.php", "content" => "Welcome to the home page") // what other pages to bring in and what to pass to it
    );  

$formpage = new Display(
    "/form", // page
    "enter note", // title
    array("use" => "404.php", "default" => "Add content here!") // what other pages to bring in and what to pass to it
    );

$getFormpage = new Display(
    "/form", // page
    "enter note", // title
    array("method" => "post", "use" => "404.php", "default" => "Add content here!") // what other pages to bring in and what to pass to it
    );


    
$app->run_app($page, array($homepage, $formpage));
  
//echo $app->title;  
    
             

?>
