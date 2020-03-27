<?php

require_once('model/Manager.php');

class UserManager extends Manager {

    public function getUser($userName, $password) {
        $db = $this->dbConnect();
        $req = $db->prepare('SELECT * FROM users WHERE username = ? AND pssword = ?');
        $req->execute(array($userName, $password));
        $user = $req->fetch();

        return $user;
    }
}