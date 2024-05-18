<?php
class UserModel
{
    private $csvUser =  URL . '/asset/user.csv';

    public function readUser($login, $password)
    {

        if (($user = fopen($this->csvUser, "r")) !== false) {

            while (($data = fgetcsv($user, 1000, ",")) !== false) {

                $data = [$data[0], $data[1], $data[2], $data[3]];
                if (in_array($login, $data) && in_array($password, $data)) {
                    $users = [
                        'id' => $data[0],
                        'login' => $data[1],
                        'password' => $data[2],
                        'role' => $data[3],
                    ];
                    return $users;
                }
            }
            fclose($user);
        }
    }
}
