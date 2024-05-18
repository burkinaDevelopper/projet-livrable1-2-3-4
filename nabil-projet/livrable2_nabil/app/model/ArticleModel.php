<?php

class ArticleModel
{
    private $csvFile =  URL . '/asset/t_article.csv';
    private $csvDetail =  URL . '/asset/details.csv';

    public function readAllArticles()
    {
        $articles = [];

        if (($article = fopen($this->csvFile, "r")) !== false) {

            while (($data = fgetcsv($article, 11, ",")) !== false) {
                if ($data[0] != "id" && $data[1] != "title" && $data[2] != "date" && $data[3] != "path") {
                    $articles[] = [
                        'id' => $data[0],
                        'title' => $data[1],
                        'date' => $data[2],
                        'path' => $data[3],
                    ];
                }
            }
            fclose($article);
        }
        return $articles;
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
