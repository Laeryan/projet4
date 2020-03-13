<?php

function displayPostForm() {

    $action = 'createPost';
    $postTitle= 'Crééz votre chapitre';
    $postContent = 'Saisissez ici votre texte';

    require('view/backend/postForm.php');
}

function createPost() {
    
}