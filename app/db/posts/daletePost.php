<?php

require_once "bootstrap.php";
if(!isset($_GET['id'])||empty($_GET['id'])){
    exit;
}

$post= $newPost->getOnePost($_GET["id"]);
// if(file_exists("uploads/")){
//     unlink("uploads/" . $post->photo);
// }

if(isset($_POST['btnPost'])){
    $_POST['id'] = $_GET['id'];
    $newPost->deletePost($_GET["id"]);
    header("Location: index.php");
    exit;
}

$res=$newPost->deletePost($_POST);
if($res>-1){
    if(file_exists('uploads/')){
        unlink('uploads/' . $post->photo);
    }
}
require_once "views/post/deletePost.view.php";