<?php

class FavorieController extends MainController
{
    public function favories()
    {
        if (isset($_SESSION['login']) && isset($_SESSION['role']) && isset($_SESSION['articles'])) {
            $_SESSION['login'];
            $_SESSION['role'];
            $_SESSION['articles'];
        }
        $data = [
            'view' => 'view/favorieView.php',
            'template' => 'view/template.php',
        ];

        $this->genererPage($data);
    }
    public function add($id)
    {
        $article = new ArticleModel();
        $data = $article->readbyId($id);

        if (isset($_SESSION['articles'])) {
            array_push($_SESSION['articles'], $data);
        } else {
            $_SESSION['articles'] = [$data];
        }
        header("Location:" . URL . "favories");
    }
    public function remove($id)
    {
        $article = new ArticleModel();
        $data =  $article->readbyId($id);
        if (isset($_SESSION['articles'])) {
            foreach ($_SESSION['articles'] as $key => $value) {
                if ($value['id'] == $id) {
                    unset($_SESSION['articles'][$key]);
                }
            }
        }
        header("Location:" . URL . "favories");
    }
}
