<html>
    <head></head>
    <body>
        <?php
        
        if(isset($_GET['file']))
        {
            $files=scandir('pages');
            print_r($files);
            echo "<h3>contents'pages/{$_GET['file']}.txt'</h3>";
            include("pages/{$_GET['file']}");
        }
        ?>
    </body>
</html>