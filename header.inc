<?php
$pages = [
    "Home" => "/index.php",
    "About" => "/about.php",
    "Events" => "/events.php",
    "Gallery" => "/gallery.php",
    "Sponsors" => "/sponsors.php",
    "Contact" => "/contact.php",
];

$currentPage = empty($_SERVER['SCRIPT_NAME']) ? 'index.php' : $_SERVER['SCRIPT_NAME'];
?>
<!DOCTYPE html>
<html>
<head>
    <title><?= empty($PAGE_TITLE) ? 'Pantherbotics' : $PAGE_TITLE ?></title> <!-- remember to change this -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="assets/stylesheets/style.css">
    <link rel="icon" href="assets/images/centerlogo.jpg" type="image/gif" sizes="16x16">
</head>
<body>
<header>
    <nav class="navbar navbar-panther">
        <div class="container">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar"
                        aria-expanded="false" aria-controls="navbar">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <b><a class="navbar-brand" href="/index.php">Pantherbotics</a></b>
            </div>
            <div id="navbar" class="navbar-collapse collapse">
                <ul class="nav navbar-nav navbar-right">
                    <?php
                    foreach ($pages as $pageName => $pagePath) {
                        ?>
                        <li <?= $currentPage == $pagePath ? 'class="active"' : '' ?>>
                            <a href="<?= $pagePath ?>"><?= $pageName ?></a>
                        </li>
                        <?php
                    }
                    ?>
                </ul>
            </div><!--/.nav-collapse -->
        </div><!--/.container-fluid -->
    </nav>
</header>
