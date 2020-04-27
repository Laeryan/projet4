<?php

// Appel du manager
require_once('model/Manager.php');


// Classe qui va gérer les utilisateurs
class UserManager extends Manager {

    public function getUser($userName) {
        $db = $this->dbConnect();
        $req = $db->prepare('SELECT * FROM users WHERE username = ?');
        $req->execute(array($userName));
        $user = $req->fetch();

        return $user;
    }

    public function updatePassword($password) {
        $db = $this->dbConnect();
        $req = $db->prepare('UPDATE users SET pssword = ? WHERE id = "1"');
        $req->execute(array($password));
        $passwordList = $req->fetch();
        
        return $passwordList;
    }
}