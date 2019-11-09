<?php
    $url_host = 'http://' . $_SERVER['HTTP_HOST'];
    $pattern_document_root = addcslashes(realpath($_SERVER['DOCUMENT_ROOT']), '\\');
    $pattern_uri = '/' . $pattern_document_root . '(.*)$/';

    preg_match_all($pattern_uri, __DIR__, $matches);
    $url_path = $url_host . $matches[1][0];
    $url_path = str_replace('\\', '/', $url_path);

    if (!class_exists('lessc')) {
        $dir_block = dirname($_SERVER['SCRIPT_FILENAME']);
        require_once($dir_block . '/libs/lessc.inc.php');
    }
    $less = new lessc;
    $less->compileFile('less/16.less', 'css/16.css');
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Module-16</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
        <link rel="stylesheet" type="text/css" href="<?php echo $url_path ?>/css/bootstrap-3.3.7.min.css"/>
        <link rel="stylesheet" type="text/css" href="<?php echo $url_path ?>/css/16.css"/>
        <link rel="stylesheet" type="text/css" href="<?php echo $url_path ?>/css/swiper-5.0.2.min.css"/>
        <link rel="stylesheet" href="css/font-awesome.min.css">
        <script type="text/javascript" src="<?php echo $url_path ?>/js/jquery-3.1.1.min.js"></script>
        <script type="text/javascript" src="<?php echo $url_path ?>/js/swiper-5.0.2.min.js"></script>
        <script type="text/javascript" src="<?php echo $url_path ?>/js/bootstrap-3.3.5.min.js"></script>
         
    </head>
    <body>
        <?php include '16-content.php'; ?>
        <script type="text/javascript" src="<?php echo $url_path ?>/js/16.js"></script> 
    </body>
</html>