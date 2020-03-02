<?php
require_once "bootstrap.php";
$posts=$newPost->getAllPosts();
require_once "views/post/index.view.php";