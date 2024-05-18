<?php
class ArticleModel
{
    private $csvFile = ROOT . '/asset/t_article.csv';

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

    public function getAllArticle()
    {
        $articles = [];
        // Nombre maximum de lignes à lire
        $lineCount = 0;


        if (($handle = fopen($this->csvFile, "r")) !== FALSE) {

            while (($data = fgetcsv($handle, 50, ",")) !== false) {
                $lineCount++;
                // Assurez-vous que chaque ligne a au moins 5 éléments (titre, sujet, image, auteur, date)
                if (count($data) >= 9) {
                    $articles[] = [
                        'id_art' => $data[0],
                        'ident_art' => $data[1],
                        'date_art' => $data[2],
                        'readtime_art' => $data[3],
                        'title_art' => $data[4],
                        'hook_art' => $data[5],
                        'url_art' => $data[6],
                        'category_art' => $data[7],
                        'content_art' => $data[8],
                        'image_art' => $data[9],
                    ];
                }
            }
            fclose($handle);
        }

        $datas = [$lineCount, $articles];
        return $datas;
    }

    public function readArticle($id)
    {

        if (($handle = fopen($this->csvFile, "r")) !== FALSE) {

            while (($data = fgetcsv($handle, 50, ",")) !== false) {

                $col = [$data[0], $data[1], $data[2], $data[3], $data[4], $data[5], $data[6], $data[7], $data[8], $data[9]];
                if (in_array($id, $col)) {

                    $article = [
                        'id_art' => $data[0],
                        'ident_art' => $data[1],
                        'date_art' => $data[2],
                        'readtime_art' => $data[3],
                        'title_art' => $data[4],
                        'hook_art' => $data[5],
                        'url_art' => $data[6],
                        'category_art' => $data[7],
                        'content_art' => $data[8],
                        'image_art' => $data[9],
                    ];

                    return $article;
                }
            }
            fclose($handle);
        }
    }

    public function readByArticle($id)
    {
        $sql = "SELECT * FROM t_article WHERE id_art=:id";
        $req = $this->getBdd()->prepare($sql);
        $req->bindValue(":id", $id, PDO::PARAM_INT);
        $req->execute();
        $data = $req->fetch(PDO::FETCH_ASSOC);
        $req->closeCursor();
        return $data;
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

    public function displayFavorite($data)
    {

        foreach ($data as $id) {
            $articles[] = $this->readArticle($id);
        }
        return $articles;
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
