<?php

class HomeController extends MainController
{
    public function home()
    {
        if (isset($_SESSION['login']) && isset($_SESSION['role'])) {
            $_SESSION['login'];
            $_SESSION['role'];
        }
        $url = 'http://playground.burotix.be/adv/banner_for_isfce.json';
        $json_data = file_get_contents($url);
        $data = json_decode($json_data, true);
        $articles = new ArticleModel();
        $list = $articles->readAllArticles();
        $data = [
            'articles' => $list,
            'view' => 'view/homeView.php',
            'template' => 'view/template.php',
            'sponsor' => $data['banner_4IPDW'],

        ];

        $this->genererPage($data);
    }
    public function jsonDatas()
    {
        $articles = new ArticleModel();
        $list = $articles->readAllArticlesDetails();
        echo json_encode($list);
    }
    public function detail($id)
    {
        $article = new ArticleModel();
        $data = [
            'article' => $article->readOneArticle($id),
            'view' => 'view/detailView.php',
            'template' => 'view/template.php',
        ];

        $this->genererPage($data);
    }
    public function error($msg)
    {
        $this->pageErreur($msg);
    }
}
