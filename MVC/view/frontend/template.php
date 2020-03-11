<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <title><?= $title ?></title>
        <link href="style.css" rel="stylesheet" />
        <script src="https://cdn.tiny.cloud/1/pefo8x535mnq9k6am9ermwm3q0r7vln08vd8ojod3htjkcz3/tinymce/5/tinymce.min.js" referrerpolicy="origin"></script>

        <script>
      tinymce.init({
        selector: '#mytextarea'
      });
        </script>
    </head>
        
    <body>
        <?= $content ?>
    </body>
</html>