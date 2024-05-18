<?php

class ArticleModel
{
    private $csvFile =  URL . '/asset/t_article.csv';
    private $csvDetail =  URL . '/asset/details.csv';
    private function cnx()
    {
        $pdo = new PDO("mysql:host=localhost;dbname=4ipdw_2023;charset=utf8", "root", "");
        return $pdo;
    }
    public function readAllArticles()
    {
        $sql = "SELECT * FROM t_article";
        $req = $this->cnx()->prepare($sql);
        $req->execute();
        $datas = $req->fetchAll(PDO::FETCH_ASSOC);
        $req->closeCursor();
        return $datas;
    }
    public function readAllArticlesDetails()
    {
        $sql = "SELECT t_article.*, details.*
        FROM t_article INNER JOIN details ON t_article.id = details.articleID";

        $req = $this->cnx()->prepare($sql);
        $req->execute();
        $datas = $req->fetchAll(PDO::FETCH_ASSOC);
        $req->closeCursor();
        return $datas;
    }
    public function readOneArticle($id)
    {
        $sql = "SELECT * FROM details WHERE id=:id";
        $req = $this->cnx()->prepare($sql);
        $req->execute([
            ":id" => $id
        ]);
        $datas = $req->fetch(PDO::FETCH_ASSOC);
        $req->closeCursor();
        return $datas;
    }
    public function readbyId($id)
    {
        $sql = "SELECT * FROM t_article WHERE id=:id";
        $req = $this->cnx()->prepare($sql);
        $req->execute([
            ":id" => $id
        ]);
        $datas = $req->fetch(PDO::FETCH_ASSOC);
        $req->closeCursor();
        return $datas;
    }

    public function readArticle($id)
    {

        if (($detail = fopen($this->csvDetail, "r")) !== FALSE) {

            while (($data = fgetcsv($detail, 50, ",")) !== false) {

                $datas = [$data[0], $data[1], $data[2], $data[3], $data[4], $data[5], $data[6]];
                if (in_array($id, $datas)) {
                    $article = [
                        'id' => $data[0],
                        'articleID' => $data[1],
                        'title' => $data[2],
                        'image' => $data[3],
                        'description' => $data[4],
                        'content' => $data[5],
                        'tag' => $data[6],
                    ];
                }
            }
            fclose($detail);
        }
        return $article;
    }
    public function selectArticle($id)
    {
        if (($article = fopen($this->csvFile, "r")) !== FALSE) {

            while (($data = fgetcsv($article, 50, ",")) !== false) {

                $list = [$data[0], $data[1], $data[2], $data[3]];
                if (in_array($id, $list)) {

                    $article = [
                        'id' => $data[0],
                        'title' => $data[1],
                        'date' => $data[2],
                        'path' => $data[3],
                    ];

                    return $article;
                }
            }
            fclose($article);
        }
    }
}
