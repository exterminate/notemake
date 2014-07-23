<?php



if(!isset($_GET['page']))
    $page = "/";
else
    $page = $_GET['page'];
    
    
class App {    
    function run_app($page, $pageVar) {
        foreach($pageVar as $p) {
            if($page == $p->page) {
                include 'structure.php';
                break;
            }
        }       
    }
}
?>