<?php $title = 'Mon blog'; ?>

<?php ob_start(); ?>

test test test 

<?php $content = ob_get_clean(); ?>

<?php require('template.php'); ?>