<?php

class UserController extends MainController
{
    public function index()
    {
        $data = [
            'view' => 'view/loginView.php',
            'template' => 'view/template.php',
        ];

        $this->genererPage($data);
    }
    public function login($login, $password)
    {
        $user = new UserModel();
        $data = $user->readUser($login, $password);
        if (!empty($data)) {
            $_SESSION['login'] = $data['login'];
            $_SESSION['role'] = $data['role'];
            header('Location:' . URL . 'profil');
        } else {
            $_SESSION['errors'] = "identifiant incorrect";
            header('Location:' . URL . 'login');
        }
    }
    public function profil()
    {
        if (isset($_SESSION['login']) && isset($_SESSION['role'])) {
            $_SESSION['login'];
            $_SESSION['role'];
        }
        $data = [
            'view' => 'view/profilView.php',
            'template' => 'view/template.php',
        ];

        $this->genererPage($data);
    }
    public function logout()
    {
        unset($_SESSION["user"]);
        unset($_SESSION["role"]);
        session_destroy();
        header("Location:" . URL . "/");
    }
}
