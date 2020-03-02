<?php
class PostData
{
    protected $pdo;
    public function __construct(PDO $pdo)
    {
        $this->pdo=$pdo;
    }
    public function getAllPosts()
    {
        $stmt = $this->pdo->prepare("SELECT * FROM posts ORDER BY datePublication");
        if ($stmt->execute()) {
            return $stmt->fetchAll();
        };
        return null;
    }

    public function insertPost($data)
    {
        $stmt = $this->pdo->prepare("INSERT INTO posts(title,description,datePublication,photo)
                                    values (:title,:description,:datePublication, :photo)");
        if ($stmt->execute([
            "title" => $data["title"],
            "description" => $data["description"],
            "datePublication" => $data["datePublication"],
            "photo"=>$data["photo"]
            ])) {
            return $this->pdo->lastInsertId();
        };
        return -1;
        
        
    }
    public function deletePost($id)
    {
        $stmt = $this->pdo->prepare("DELETE FROM posts WHERE id=:id");
        if ($stmt->execute(["id"=>$id])){
            return 1;
        };
        return -1;
    }

    public function getOnePost($id)
    {
        $stmt = $this->pdo->prepare("SELECT * FROM posts Where id=:id");
        if ($stmt->execute([
            "id"=>$id])) {
            return $stmt->fetch();
        };
        return null;
    }

    public function updatePost($data)
    {
        $stmt = $this->pdo->prepare("UPDATE posts SET title=:title,description=:description,photo=:photo where id=:id");
        if ($stmt->execute([
            "title" => $data["title"],
            "description" => $data["description"],
            "id"=>$data["id"],
            "photo"=>$data["photo"]
            ])) {
            return $this->pdo->lastInsertId();
        };
        return -1;
    
    }
}