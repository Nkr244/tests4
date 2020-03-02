
<?php 
$title = "Главная страница";
require_once __DIR__ . "/../parts/header.php"
?>
<h2>Посты</h2>
<div class="container">
<a class="col-mb-4 btn btn-primary mt-4 mb-3 p-3" href="insertPost.php">
    Добавить новую запись
    
    </a>
<div class="row">
<?php
$i=1;
foreach ($posts as $post): ?>
<div class="card mt-3 p-2 col-md-4 col-sm-6">
    <img height="65%" src="<?= $post->photo ? 'uploads/' . $post->photo : ''?>"
         class="card-img-top img-small" alt="Фото" >
    <div class="card-body">
        <h5 class="card-title"><?= $post->title ?></h5>
        <p class="card-text"><?= date_format(new DateTime($post->datePublication), 'd.m.Y')?></p>
        <a class="btn btn-info p-2" style="width:100%;"
            href='showPost.php?id=<?= $post->id; ?>'>
        Подробно
        </a>
    </div>
</div>
<?php endforeach; ?>


</div>
<?php require_once __DIR__ . "/../parts/footer.php" ?>























<!-- <!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <title>Главная</title>
</head>
<body> -->

























<!-- <table class ="table table-striped table-bordered table-hover col-md-12">
    <?php foreach ($posts as $row): ?>
    <tr class="d-flex">
        <td class="col-md-1"><?= $row->id ?></td>
        <td class="col-md-2"><?= $row->title ?></td>
        <td class="col-md-3"><?= nl2br($row->description)  ?></td>
        <td class="col-md-2"><?= date_format(new DateTime($row->datePublication),'d : m : y') ?></td>
<td class="col-md-2 p-4">
    <a class="btn btn-info p-2"
    href='daletePost.php?id=<?= $row->id; ?>'>
        Удалить пост</a>
</td>
        <td class="col-md-2 p-4">
            <a class="btn btn-info p-2"
               href='updatePost.php?id=<?= $row->id; ?>'>
                Изменить пост</a>
        </td>
    </tr>
    <?php endforeach; ?>
</table> -->
