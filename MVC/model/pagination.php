<?php

require_once('model/Manager.php');

class Paging extends Manager {

    public function postPaging() {
        $db = $this->dbConnect();
        $postCount = $db->query('SELECT count(id) AS postCount FROM posts');

        return $postCount->fetch()['postCount'];
    }
}