<?php

class HomeController extends MainController
{
    public function home()
    {
        if (isset($_SESSION['login']) && isset($_SESSION['role'])) {
            $_SESSION['login'];
            $_SESSION['role'];
        }
        $articles = new ArticleModel();
        $list = $articles->readAllArticles();
        $data = [
            'articles' => $list,
            'slide' => $articles->readArticle(2),
            'view' => 'view/homeView.php',
            'bannner' => true,
            'template' => 'view/template.php',
        ];

        $this->genererPage($data);
    }
    public function detail($id)
    {
        if (isset($_SESSION['login']) && isset($_SESSION['role'])) {
            $_SESSION['login'];
            $_SESSION['role'];
        }
        $article = new ArticleModel();
        $data = [
            'article' => $article->readArticle($id),
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
