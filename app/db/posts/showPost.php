<?php
require_once "bootstrap.php";
$title="Просмотр информации";
$post = $newPost->getOnePost($_GET['id']);
if(!$post){
    header("Location: /");
    exit;
}
require_once "views/post/showPost.view.php";

