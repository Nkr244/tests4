<?php
require_once "bootstrap.php";
if ((!isset($_GET['id']) || empty($_GET['id'])) && (!isset($_GET['title']) || empty($_GET['title']))) {
exit;
}
$post= $newPost->getOnePost($_GET["id"]);

if(isset($_POST['btnPost'])){
    $_POST['id'] = $_GET['id'];
    $newPost->updatePost($_POST);
    header("Location: index.php");
    exit;
}
$res=$newPost->updatePost($_POST);
    
    if($res>-1)
    {
        $fileTarget="uploads/" . $_POST['photo'];
        move_uploaded_file($fileTemp,$fileTarget);
       
    }
require_once "views/post/updatePost.view.php";