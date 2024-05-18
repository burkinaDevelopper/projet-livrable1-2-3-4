<?php
class ArticleModel
{
    private  $pdo;



    private function setBdd()
    {
        $this->pdo = new PDO("mysql:host=localhost;dbname=4ipdw_2023;charset=utf8", "root", "");
        $this->pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    }
    protected function getBdd()
    {
        if ($this->pdo === null) {
            $this->setBdd();
        }
        return  $this->pdo;
    }

    public function readArticle($id)
    {
        $sql = "SELECT * FROM t_article WHERE id_art=:id";
        $req = $this->getBdd()->prepare($sql);
        $req->bindValue(":id", $id, PDO::PARAM_INT);
        $req->execute();
        $data = $req->fetch(PDO::FETCH_ASSOC);
        $req->closeCursor();
        return $data;
    }

    public function displayFavorite($data)
    {

        foreach ($data as $id) {
            $articles[] = $this->readArticle($id);
        }
        return $articles;
    }


    public function readAll()
    {
        $sql = "SELECT * FROM t_article";
        $req = $this->getBdd()->prepare($sql);
        $req->execute();
        $datas = $req->fetchAll(PDO::FETCH_ASSOC);
        $req->closeCursor();
        return $datas;
    }
    public function reachArticle($query)
    {
        //rechercher par cathegory ou par titre de l'article
        $sql = "SELECT * FROM t_article WHERE category_art LIKE :category OR title_art LIKE :title";
        $req = $this->getBdd()->prepare($sql);
        $query = "%{$query}%";
        $req->bindValue(":category", $query);
        $req->bindValue(":title", $query);
        $req->execute();
        $data = $req->fetchAll(PDO::FETCH_ASSOC);
        $req->closeCursor();
        return $data;
    }
}
