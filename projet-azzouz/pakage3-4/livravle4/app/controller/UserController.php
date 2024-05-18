<?php

class UserController
{

    public function index()
    {
        if (!isset($_SESSION['user'])) {
            include(VIEW . "/login.php");
        } else {
            header("Location:" . URL . "/profile");
        }
    }

    public function connextion_login($username, $password)
    {

        // Construct the API URI
        $uri_head = "http://playground.burotix.be/login/?";
        $uri_param = [
            "login"   => $username,
            "passwd"  => $password,
        ];
        $uri = $uri_head . http_build_query($uri_param);

        $json_string = file_get_contents($uri);
        $auth_a = json_decode($json_string, true);

        if ($auth_a['identified']) {
            $_SESSION['user'] = $username;
            $_SESSION['role'] = "admin";

            // Redirect to the profile page upon successful login
            header("Location:" . URL . "/profile");
        } else {
            // session_start();
            $_SESSION["error"] = "error";
            header("Location:" . URL . "/login");
            // echo "<script>alert('nom du utilisateur ou password incorrect!)</script>";
        }
    }

    public function profile()
    {
        $user = isset($_SESSION['user']) ? $_SESSION['user'] : '';
        $role = isset($_SESSION['role']) ? $_SESSION['role'] : '';
        include(VIEW . "/profile.php");
    }

    public function logout()
    {
        // Start the session if it's not already started
        // Destroy the session
        unset($_SESSION["user"]);
        unset($_SESSION["role"]);

        // Redirect to the login page after logout
        header("Location:" . URL . "/");
    }
}
