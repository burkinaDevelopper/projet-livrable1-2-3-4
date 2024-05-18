<?php
abstract class MainController
{
    protected function genererPage($data)
    {
        extract($data);
        ob_start();
        require_once($view);
        $page_content = ob_get_clean();
        require_once($template);
    }


    public function pageErreur($msg)
    {
        $data_page = [
            "page_description" => "Page permettant de gérer les erreurs",
            "page_title" => "Page d'erreur",
            "msg" => $msg,
            "view" => "view/errorView.php",
            "template" => "view/template.php"
        ];
        $this->genererPage($data_page);
    }
}
