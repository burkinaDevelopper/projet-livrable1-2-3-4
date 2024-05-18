<?php
class AboutController extends MainController
{
    public function index()
    {
        if (isset($_SESSION['login']) && isset($_SESSION['role'])) {
            $_SESSION['login'];
            $_SESSION['role'];
        }
        $data = [
            'view' => 'view/aboutView.php',
            'template' => 'view/template.php',
        ];

        $this->genererPage($data);
    }
}
