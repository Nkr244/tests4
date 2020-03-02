<form action="" method="post" enctype="multipart/form-data">
        <div class="form-group mt-5">
            <label for="post_date">Дата публикации:
                <?= $newPost->datePublication ? date_format(new DateTime($newPost->datePublication), 'd.m.Y'): date('d.m.Y')?>
            </label>
        </div>
        <div class="form-group">
    <img  src="<?= $post->photo ? 'uploads/' . $post->photo : ''?>" alt="" class="img" height="500px" >            
</div>
        <div class="form-group mt-5">
            <label for="title" class="mb-3">Название:</label>
            <input type="text" class="form-control" id="title" name="title" required value="<?=$post->title ?>">
        </div>
        <input type="file" name="photo">
        <div class="form-group">
            <label for="description" class="mb-3">Введите текст: </label>
            <textarea class="form-control" id="description" name="description" id="description" rows="10" cols="50" required>
            <?=$post->description?>
            </textarea>
        </div>
        <div class="row mt-2 p-3 col-md-4 col-sm-6">
        <button type="submit" name="btnPost" class="btn btn-primary">
            <?= $btnText ?></button>
           
    
</div>
<a class="btn btn-info p-6" href='index.php' margin="10px">
        Назад</a>

</form>