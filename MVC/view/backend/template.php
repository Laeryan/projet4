<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8" />
    <title>Un billet pour l'Alaska</title>
    <link href="public/css/style.css" rel="stylesheet" />
    <script src="https://cdn.tiny.cloud/1/pefo8x535mnq9k6am9ermwm3q0r7vln08vd8ojod3htjkcz3/tinymce/5/tinymce.min.js" referrerpolicy="origin"></script>
</head>

<body>
    <?php include('view/frontend/menu.php') ?>
    <?= $content ?>
    <script>
        tinymce.init({
            selector: 'textarea',
            plugins: 'a11ychecker advcode casechange formatpainter linkchecker autolink lists checklist media mediaembed pageembed permanentpen powerpaste table advtable tinycomments tinymcespellchecker',
            toolbar: 'a11ycheck addcomment showcomments casechange checklist code formatpainter pageembed permanentpen table',
            toolbar_mode: 'floating',
            tinycomments_mode: 'embedded',
            tinycomments_author: 'Author name',
            forced_root_block: '',
            force_br_newlines: true,
            force_p_newlines: false,
        });
    </script>
</body>

</html>