<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta name="description" content="">
        <meta name="author" content="">
            <link rel="icon" href="assets/img/favicons/favicon.ico">

            <title>Découverte de l'objet</title>

            <link rel="canonical" href="https://getbootstrap.com/docs/4.0/examples/starter-template/">


            <link href="assets/css/bootstrap.min.css" rel="stylesheet">


            <link href="assets/css/style.css" rel="stylesheet">
    </head>

    <body>

        <header><?php echo $header; ?></header>

        <div>
            <!-- La vue s'affichera ici -->
            <?php echo $page; ?>
        </div>

        <footer><?php echo $footer; ?></footer>
    </body>
</html>