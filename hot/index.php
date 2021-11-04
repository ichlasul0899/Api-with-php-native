<?php 

require_once "method.php";

$news = new News();
$request_method=$_SERVER["REQUEST_METHOD"];
switch ($request_method){
    case 'GET':
        if(!empty($_GET["id"])){
            $id=intval($_GET["id"]);
            $news->get_news($id);
        } else {
            $news->get_all_news();
        }
        break;
    default:
        // Invalid Request Method
        header("HTTP/1.0 405 Method Not Allowed");
        break;
    break;
}


?>