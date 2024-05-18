<?php
session_start();
require_once('./app/model/ArticleModel.php');
require_once('./app/model/UserModel.php');
require_once('./app/MainController.php');
require_once('./app/controller/HomeController.php');
require_once('./app/controller/UserController.php');
require_once('./app/controller/AboutController.php');
require_once('./app/controller/FavorieController.php');

$home = new HomeController();
$user = new UserController();
$about = new AboutController();
$favorie = new FavorieController();

define("URL", str_replace("index.php", "", (isset($_SERVER['HTTPS']) ? "https" : "http") .
    "://" . $_SERVER['HTTP_HOST'] . $_SERVER["PHP_SELF"]));

if (empty($_GET['page'])) {
    $page = "accueil";
} else {
    $url = explode("/", filter_var($_GET['page'], FILTER_SANITIZE_URL));
    $page = $url[0];
}

switch ($page) {
    case 'accueil':
        // unset($_SESSION['errors']);
        $home->home();
        break;
    case 'serach':
        if (!empty($_POST['query'])) {
            $query = $_POST['query'];
            $home->search($query);
        } else {
            $home->home();
        }
        break;
    case 'article_detail':
        if (!empty($url[1])) {
            $home->detail($url[1]);
        }
        break;
    case 'login':
        $user->index();
        break;
    case 'submit_login':
        $password = $_POST['password'];
        $username = $_POST['login'];

        if (!empty($_POST['login']) && !empty($_POST['password'])) {
            $user->login($username, $password);
        }
        break;
    case 'profil':
        if (isset($_SESSION['login']) && isset($_SESSION['role'])) {
            $user->profil();
        } else {
            header('Location:' . URL . 'login');
        }
        break;
    case 'logout':
        if (isset($_SESSION['login']) && isset($_SESSION['role'])) {
            $user->logout();
        } else {
            header('Location:' . URL . 'login');
        }

        break;
    case 'about':
        $about->index();
        break;
    case 'favories':
        $favorie->favories();
        break;
    case 'like':
        if (!empty($url[1])) {
            $favorie->add($url[1]);
        }
        break;
    case 'dislike':
        if (!empty($url[1])) {
            $favorie->remove($url[1]);
        }
        break;
    default:
        $home->error("la page n'existe pas");
        break;
}
