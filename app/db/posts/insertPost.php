<?php
require_once "bootstrap.php";

if(isset($_POST['btnPost'])){
    $_POST["datePublication"]=date("Y-m-d");
    //Изображение
    $fileName=$_FILES['photo']['name'];
    $fileTemp=$_FILES['photo']['tmp_name'];
    $fileType=$_FILES['photo']['type'];
    $fileSize=$_FILES['photo']['size'];
    $fileError=$_FILES['photo']['error'];

    $fileExt=strtolower(end(explode('.',$fileName)));
    $fileName=explode('.',$fileName)[0];
    $extensions=['jpg', 'jpeg', 'png'];
    
    $_POST['photo']="default.jpg";
    
    if(in_array($fileExt,$extensions)){
        if($fileSize<=5000000){
            if($fileError==0){
                $_POST['photo']=implode('.',[$fileName,$fileExt]);
            }
        }
    }
    
    $res=$newPost->insertPost($_POST);
    //Конец
    
    if($res>-1)
    {
        $fileTarget="uploads/" . $_POST['photo'];
        move_uploaded_file($fileTemp,$fileTarget);
        header("Location: index.php");
    }
}
require_once "views/post/insertPost.view.php";