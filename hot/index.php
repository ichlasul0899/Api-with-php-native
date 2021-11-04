<?php 

require_once "method.php";

$news = new News();
$request_method=$_SERVER["REQUEST_METHOD"];
switch ($request_method){
    case 'GET':
        if(!empty($_GET["id"])){
            $url = "http://localhost/hot/1";
            echo parse_url($url, PHP_URL_PATH);
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