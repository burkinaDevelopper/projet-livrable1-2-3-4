<?php
class ArticleModel
{
    private $csvFile = ROOT . '/asset/t_article.csv';

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

    public function displayFavorite($data)
    {

        foreach ($data as $id) {
            $articles[] = $this->readArticle($id);
        }
        return $articles;
    }
}
